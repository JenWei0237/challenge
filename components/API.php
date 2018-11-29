<?php

namespace app\components;

use Yii;
use yii\base\Component;
use yii\httpclient\Client;

class API extends Component
{
	const METHOD_POST = 'post';
	const METHOD_GET = 'get';

	public function request($url, $method, $data=[])
	{
		try{
			$method = strtolower($method);
			if(!in_array($method, [self::METHOD_POST, self::METHOD_GET])){
				throw new \Exception(Yii::t('app', 'API supported POST and GET'));
			}

			$result = [];
			$client = new Client();
			$timeout = 30;

			if($method == self::METHOD_POST){
				$response = $client->createRequest()
					->setFormat(Client::FORMAT_JSON)
					->setMethod($method)
					->setUrl($url)
					->setData($data)
					->setOptions([
						'timeout' => $timeout
					])
					->send();
			}else{
				$full_url = $url . '?' . http_build_query($data);
				$response = $client->createRequest()
					->setFormat(Client::FORMAT_JSON)
					->setMethod($method)
					->setUrl($full_url)
					->setOptions([
						'timeout' => $timeout
					])
					->send();
			}

			if($response->isOk) {
				$result = $response->data;

				// Error handling
				if(!empty($result['error'])){
					if(!empty($result['details'])){
						$er_code = !empty($result['code']) ? $result['code'] : 0;
						throw new \Exception($result['details'][0]['message'], $er_code);
					}
					if(!empty($result['message'])){
						$er_code = !empty($result['code']) ? $result['code'] : 0;
						throw new \Exception($result['message'], $er_code);
					}
				}
			}
		}catch(\Exception $e)
		{
			throw $e;
		}

		return $result;
	}

	public function requestFile($url, $method, $data=[], $file=[])
	{
		try{
			$method = strtolower($method);
			if(!in_array($method, [self::METHOD_POST, self::METHOD_GET])){
				throw new \Exception(Yii::t('app', 'API supported POST and GET'));
			}

			$result = [];
			$response = '';
			$requested = [];
			$client = new Client();
			$timeout = 120;

			if($method == self::METHOD_POST){
				$response = $client->createRequest();
				$response->setFormat(Client::FORMAT_JSON);
				$response->setMethod($method);
				$response->setUrl($url);
				$response->setData($data);
				$response->setOptions(['timeout' => $timeout]);
				$arr = [];

				if(!empty($file)){
					foreach ($file as $key => $value) {
						$file_name = str_replace('tmp', $value->extension, $value->tempName);
						$response->addFile($key, $value->tempName, ['fileName' => $file_name]);
					}
				}

				$requested = $response->send();
			}else{
				$full_url = $url . '?' . http_build_query($data);
				$response = $client->createRequest()
					->setFormat(Client::FORMAT_JSON)
					->setMethod($method)
					->setUrl($full_url)
					->setOptions([
						'timeout' => $timeout
					])
					->send();
			}

			if($requested->isOk) {
				$result = $requested->data;

				// Error handling
				if(!empty($result['error'])){
					if(!empty($result['details'])){
						$er_code = !empty($result['code']) ? $result['code'] : 0;
						throw new \Exception($result['details'][0]['message'], $er_code);
					}
					if(!empty($result['message'])){
						$er_code = !empty($result['code']) ? $result['code'] : 0;
						throw new \Exception($result['message'], $er_code);
					}
				}
			}
		}catch(\Exception $e)
		{
			throw $e;
		}

		return $result;
	}
}