<!DOCTYPE html>
<html>
	<head>
		<?php
			require "inc/head.php";
		?>
	</head>
	<body>
		<?php
			require "inc/header.php";
		?>
		<div class="buy-div">
			<ul>
				<li class="buy-title">Normal</li>
				<li class="buy-price">$60</li>
				<select>
				  	<option value="buy-normal1">1</option>
				  	<option value="buy-normal2">2</option>
				  	<option value="buy-normal3">3</option>
				 	<option value="buy-normal4">4</option>
				</select>	
				<li class="buy-button"><button class="button" href="#">Buy</button></li>
			</ul>
		</div>
		<div class="buy-div">
			<ul>
				<li class="buy-title">VIP</li>
				<li class="buy-price">$200</li>
				<select>
				  	<option value="buy-vip1">1</option>
				  	<option value="buy-vip2">2</option>
				  	<option value="buy-vip3">3</option>
				 	<option value="buy-vip4">4</option>
				</select>	
				<li class="buy-button"><button class="button" href="#">Buy</button></li>
			</ul>
		</div>
		<div class="buy-div">
			<ul>
				<li class="buy-title">Moshpit</li>
				<li class="buy-price">$70</li>
				<select>
				  	<option value="buy-moshpit1">1</option>
				  	<option value="buy-moshpit2">2</option>
				  	<option value="buy-moshpit3">3</option>
				 	<option value="buy-moshpit4">4</option>
				</select>	
				<li class="buy-button"><button class="button" href="#">Buy</button></li>
			</ul>
		</div>
		<?php
			require "inc/footer.php";
		?>
	</body>
</html>