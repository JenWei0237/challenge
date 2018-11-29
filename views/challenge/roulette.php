<?php
use yii\bootstrap\ActiveForm;
use yii\helpers\Html;
use yii\helpers\Url;

$table_url = Url::to("@web/images/bet-table.PNG");

$this->registerJs('
	// function plus() {
	// 	var bet = document.getElementById("bet_field").value;
	// 	alert(bet);
	// }
	// window.plus = plus;
');
?>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<?php $form = ActiveForm::begin(); ?>
	<div class="row">
		<div class="col-md-12 col-sm-12 col-xs-12">
			<div class="row">
				<div class="col-md-4 col-md-offset-4">
					<div class="card-title">
						<h4>Jackpot 0.9 ETH</h4>
					</div>
					<div class="card-content">
						<div class="col-md-12 col-sm-12 col-xs-12">
							<img class="image-size" src="<?=$table_url?>" alt="bacarrat" style="width: 430px;height: 200px">
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-1 col-md-offset-4">
					<center>
						<button type="button" id="minus" class="minus-plus-button">-</button>
					</center>
				</div>
				<div class="col-md-2">
					<?= $form->field($model, 'bet')->textInput(['id' => 'bet_field', 'class' => 'input-field', 'size' => 9, 'value' => "0.10"])->label(false) ?>
					<center>
						<label class="text-color">Your Bet (ETH)</label>
					<center>
				</div>
				<div class="col-md-1">
					<center>
						<?= Html::Button("+", ['id' => 'plus', 'class' => 'minus-plus-button']) ?>
						<!-- <button type="button" id="plus" class="minus-plus-button" onclick="plus()">+</button> -->
					</center>
				</div>
			</div>
			<div class="row">
				<div class="col-md-6 col-md-offset-5">
					<button id="roulette-button" type="button" class="play-button" data-toggle="modal" data-target="#rouletteModal" >Play Now</button>
				</div>
				<div class="col-md-12">
					<center>
						<label class="text-color">Gas Price : 13</label>
					<center>
				</div>
			</div>
			<div class="col-md-6">
				<div class="card-title">
						<h4>Bet History</h4>
					</div>
					<div class="card-content history-table">
						<table>
							<tr>
								<th>Player</th>
								<th>Bet</th>
								<th>Result</th>
								<th>Wins</th>
								<th>ID</th>
							</tr>
							<tr>
								<td>0xjg92u3htg9823urhfiu9128hr3</td>
								<td>0.06</td>
								<td>90 0.569</td>
								<td>0.08 ETH</td>
								<td>156</td>
							</tr>
							<tr>
								<td>0xjg92u3htg9823urhfiu9128hr3</td>
								<td>0.06</td>
								<td>90 0.569</td>
								<td>0.08 ETH</td>
								<td>156</td>
							</tr>
							<tr>
								<td>0xjg92u3htg9823urhfiu9128hr3</td>
								<td>0.06</td>
								<td>90 0.569</td>
								<td>0.08 ETH</td>
								<td>156</td>
							</tr>
							<tr>
								<td>0xjg92u3htg9823urhfiu9128hr3</td>
								<td>0.06</td>
								<td>90 0.569</td>
								<td>0.08 ETH</td>
								<td>156</td>
							</tr>
							<tr>
								<td>0xjg92u3htg9823urhfiu9128hr3</td>
								<td>0.06</td>
								<td>90 0.569</td>
								<td>0.08 ETH</td>
								<td>156</td>
							</tr>
							<tr>
								<td>0xjg92u3htg9823urhfiu9128hr3</td>
								<td>0.06</td>
								<td>90 0.569</td>
								<td>0.08 ETH</td>
								<td>156</td>
							</tr>
						</table>
					</div>
				</div>
				<div class="card-title">
						<h4>Your History</h4>
					</div>
					<div class="card-content history-table">
						<table>
							<tr>
								<th>Date</th>
								<th>Bet</th>
								<th>Result</th>
								<th>Wins</th>
								<th>ID</th>
							</tr>
							<tr>
								<td>11 Nov 2018</td>
								<td>0.06</td>
								<td>90 0.569</td>
								<td>0.08 ETH</td>
								<td>156</td>
							</tr>
							<tr>
								<td>11 Nov 2018</td>
								<td>0.06</td>
								<td>90 0.569</td>
								<td>0.08 ETH</td>
								<td>156</td>
							</tr>
							<tr>
								<td>11 Nov 2018</td>
								<td>0.06</td>
								<td>90 0.569</td>
								<td>0.08 ETH</td>
								<td>156</td>
							</tr>
							<tr>
								<td>11 Nov 2018</td>
								<td>0.06</td>
								<td>90 0.569</td>
								<td>0.08 ETH</td>
								<td>156</td>
							</tr>
							<tr>
								<td>11 Nov 2018</td>
								<td>0.06</td>
								<td>90 0.569</td>
								<td>0.08 ETH</td>
								<td>156</td>
							</tr>
							<tr>
								<td>11 Nov 2018</td>
								<td>0.06</td>
								<td>90 0.569</td>
								<td>0.08 ETH</td>
								<td>156</td>
							</tr>
						</table>
					</div>
				</div>
			</div>
		</div>
	</div>
<?php ActiveForm::end(); ?>
<!-- Modal -->
<div id="rouletteModal" class="modal fade" role="dialog" style="margin-top: 100px">
	<div class="modal-dialog ">
		<div class="modal-content modal-style" style="background-color: #232846; color: #ffffff">
			<div class="modal-body">
				<p style="font-size: 20px; padding-top: 50px;"><b>LOADING ...</b></p>
				<p style="font-size: 16px; padding-top: 50px; padding-bottom: 50px;">Please don't close your window</p>
			</div>
		</div>
	</div>
</div>

<div id="showRouletteModal" class="modal fade" role="dialog" style="margin-top: 100px">
	<div class="modal-dialog ">
		<div class="modal-content modal-style" style="background-color: #232846; color: #ffffff">
			<div class="modal-body">
				<p style="font-size: 20px; padding-top: 50px;"><b>PLAYER WINS!</b></p>
				<p style="font-size: 16px; padding-top: 50px; padding-bottom: 50px;">Please don't close your window</p>
			</div>
		</div>
	</div>
</div>

