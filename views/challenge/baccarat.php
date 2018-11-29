<?php
use yii\bootstrap\ActiveForm;
use yii\helpers\Html;

$this->registerJs('
	function connectWeb3() {
		if(typeof web3 !== "undefined") {
			web3 = new Web3(web3.currentProvider);
		} else {
			alert("Your web3 is undefined. Please connect your metamask.");
			web3 = new Web3(new Web3.providers.HttpProvider("http://localhost:8545"));
		}

		start();

		async function start() {
			var account   = await web3.eth.accounts[0];
			var gas_price = await web3.eth.getGasPrice(function(err, res) {
				if(err) {
					alert(err);
				} else {
					// console.log(gas_price);
				}
			});
			contract();

			function contract() {
				let MyContract = web3.eth.contract([{"constant":false,"inputs":[{"name":"amount","type":"uint256"}],"name":"withdraw","outputs":[],"payable":false,"stateMutability":"nonpayable","type":"function"},{"constant":false,"inputs":[{"name":"betType","type":"uint8"},{"name":"betValue","type":"uint8"}],"name":"placeBet","outputs":[],"payable":true,"stateMutability":"payable","type":"function"},{"inputs":[],"payable":false,"stateMutability":"nonpayable","type":"constructor"},{"payable":true,"stateMutability":"payable","type":"fallback"},{"anonymous":false,"inputs":[{"indexed":true,"name":"player","type":"address"},{"indexed":true,"name":"round","type":"uint256"},{"indexed":false,"name":"betType","type":"uint8"},{"indexed":false,"name":"betValue","type":"uint8"},{"indexed":false,"name":"stake","type":"uint256"},{"indexed":false,"name":"payout","type":"uint256"},{"indexed":false,"name":"win","type":"bool"},{"indexed":false,"name":"result","type":"uint8"}],"name":"Bet","type":"event"},{"anonymous":false,"inputs":[{"indexed":true,"name":"round","type":"uint256"},{"indexed":false,"name":"result","type":"uint8"}],"name":"Result","type":"event"}]);
   				var myContractInstance = MyContract.at("0xC90C16393D2d1d4746bfb90369C1F5E6416b71d4");
			}
		}
	}
	window.onload = connectWeb3();
');

$this->registerCss('

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
							<button type="button" class="bet-button">Tie Payout<br>1:8</button>
						</div>
						<div class="col-md-6 col-sm-12 col-xs-12">
							<button type="button" class="bet-button">Banker Payout<br>1:0.95</button>
						</div>
						<div class="col-md-6 col-sm-12 col-xs-12">
							<button type="button" class="bet-button">Player Payout<br>1:1</button>
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
					<?= $form->field($model, 'bet')->textInput(['id' => 'bet_field', 'class' => 'input-field', 'size' => 9, 'value' => "0.10", 'autocomplete' => 'off'])->label(false) ?>
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
					<button id="baccarat-button" type="button" class="play-button" data-toggle="modal" data-target="#baccaratModal" >Play Now</button>
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
						</table>
					</div>
				</div>
			</div>
		</div>
	</div>
<?php ActiveForm::end(); ?>
<!-- Modal -->
<div id="baccaratModal" class="modal fade" role="dialog" style="margin-top: 100px">
	<div class="modal-dialog ">
		<div class="modal-content modal-style" style="background-color: #232846; color: #ffffff">
			<div class="modal-body">
				<p style="font-size: 20px; padding-top: 50px;"><b>LOADING ...</b></p>
				<p style="font-size: 16px; padding-top: 50px; padding-bottom: 50px;">Please don't close your window</p>
			</div>
		</div>
	</div>
</div>

<div id="showBaccaratModal" class="modal fade" role="dialog" style="margin-top: 100px">
	<div class="modal-dialog ">
		<div class="modal-content modal-style" style="background-color: #232846; color: #ffffff">
			<div class="modal-body">
				<p style="font-size: 20px; padding-top: 50px;"><b>PLAYER WINS!</b></p>
				<p style="font-size: 16px; padding-top: 50px; padding-bottom: 50px;">Please don't close your window</p>
			</div>
		</div>
	</div>
</div>

