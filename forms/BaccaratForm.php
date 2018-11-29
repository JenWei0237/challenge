<?php

namespace app\forms;

use Yii;
use yii\base\Model;
use yii\bootstrap\Html;
use yii\helpers\Url;

class BaccaratForm extends Model
{
	public $bet;

	public function rules()
	{
		return [
			[['bet'], 'safe']
		];
	}


}
