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
			<div class="contact-div">
				<form accept-charset="UTF-8">
					<table class="contact-table">
						<tr>
							<td>
								<label for="name">Name*:</label>
							</td>
							<td>
								<input type="text" name="name">
							</td>
						</tr>
						<tr>
							<td>
								<label for="email">Email*:</label>
							</td>
							<td>
								<input type="text" name="email">
							</td>
						</tr>
						<tr>
							<td>
								<label for="message">Message*:</label>
							</td>
							<td>
								<textarea cols="25" rows="5"></textarea>
							</td>
						</tr>
						<tr>
							<td colspan="2">
								<input type="button" name="submit" value="Send">
							</td>
						</tr>
						<tr>
							<td colspan="2">
								<p>* required field</p>
							</td>
						</tr>
					</table>
				</form>
			</div>
		</div>
		<?php
			require "inc/footer.php";
		?>
	</body>
</html>