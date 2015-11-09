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
		<div class="main">
			<div class="col-1-3 floatleft index-col index-col-left"></div>
			<div class="col-1-3 floatleft index-col index-col-center">
				<div class="index-buttons">
					<button class="ghost-button" onclick="navigate('buy.php');">Buy Tickets</button>
					<button class="ghost-button" onclick="navigate('about.php');">Details</button>
				</div>
			</div>
			<div class="col-1-3 floatleft index-col index-col-right"></div>
			<div class="col-1-3 index-col index-col-left event-div">
				<img src="img/skalmold-logo.jpg">
				<h2 class="event-name">Event Name!</h2>
				<h4 class="event-date">Event Date</h4>
				<div class="index-buttons">
					<button class="ghost-button" onclick="navigate('buy.php');">Buy Tickets</button>
					<button class="ghost-button" onclick="navigate('about.php');">Details</button>
				</div>
			</div>
		</div>
		<?php
			require "inc/footer.php";
		?>
		<script src="js/global_functions.js"></script>
	</body>
</html>