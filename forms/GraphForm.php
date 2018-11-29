<?php

namespace app\forms;

use Yii;
use yii\base\Model;
use yii\bootstrap\Html;
use yii\helpers\Url;

class GraphForm extends Model
{
	public function rules()
	{
		return [
			[['agent_code'], 'safe']
		];
	}

	public function getSocket()
	{
		$url = 'http://ippcoin.com/site/socket';
		// $value = Yii::$app->api->request($url, "get", [
  //       	'access_token' => $access_token
  //       ]);
        return $url;
	}
}