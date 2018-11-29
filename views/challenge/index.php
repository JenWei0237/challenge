<?php
use yii\helpers\Html;
use yii\helpers\Url;

$base_url = Yii::$app->request->baseUrl;
$bacarrat_url = Url::to("@web/images/baccarat.PNG");
$roulette_url = Url::to("@web/images/roulette.PNG");
?>

<div class="row">
	<div class="col-md-6 col-md-offset-1" style="margin-top: 100px;">
		<div class="row">
			<div class="col-md-12">
				<label class="header-style"><b>Baccarat</b></label>
			</div>
		</div>
		<div class="row">
			<div class="col-md-12">
				<a href="<?=$base_url?>/challenge/baccarat">
					<button class="play-button">
						Play Now
					</button>
				</a>
			</div>
		</div>
		<div class="row">
			<div class="col-md-12">
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
		</div>
	</div>
	<div class="col-md-5" style="margin-top: 150px;">
		<center>
			<img class="image-size" src="<?=$bacarrat_url?>" alt="bacarrat">
		</center>
	</div>
</div>
<div class="row">
	<div class="col-md-3 col-md-offset-1" style="margin-top: 150px;">
		<center>
			<img class="image-size" src="<?=$roulette_url?>" alt="bacarrat">
		</center>
	</div>
	<div class="col-md-6 col-md-offset-1" style="margin-top: 100px;">
		<div class="row">
			<div class="col-md-12">
				<label style="float: right" class="header-style"><b>Roulette</b></label>
			</div>
		</div>
		<div class="row">
			<div class="col-md-12">
				<a href="<?=$base_url?>/challenge/roulette">
					<button style="float: right" class="play-button">
						Play Now
					</button>
				</a>
			</div>
		</div>
		<div class="row">
			<div class="col-md-12">
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
		</div>
	</div>
</div>
