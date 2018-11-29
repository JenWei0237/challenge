<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\helpers\Url;
use app\assets\AppAsset;

AppAsset::register($this);
$base_url = Yii::$app->request->baseUrl;
$bg_url   = Url::to("@web/images/bg-3.jpg");
$logo_url   = Url::to("@web/images/ether2bet_logo.PNG");
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body style="background: url(<?= $bg_url ?>) no-repeat center center fixed;background-size: cover;overflow-x: hidden">
	<?php $this->beginBody() ?>
		<div class="navigation-bar">
			<ul>
				<li style="color: #6074D4; float: left; font-size: 40px;padding-left: 20px; font-family: courier; margin-top: -15px; margin-bottom: -25px;">
					<a href="<?=$base_url?>/challenge/index"><b>ether2bet</b></a>
				</li>
				<li><a href="#">FAQ</a></li>
				<li><label>|</label></li>
				<li><a href="#">How to Play</a></li>
			</ul>
		</div>

		<?= $content ?>

		<footer>
			<a href="#"><label>Copyright 2018 Ether2Bet</label></a>
			<label>|</label>
			<a href="#"><label>Terms & Conditions</label></a>
			<label>|</label>
			<a href="#"><label>Privacy Policy</label></a>
		</footer>
	<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
