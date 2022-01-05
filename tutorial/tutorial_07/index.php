<!DOCTYPE html>
<html lang="en">

<head>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css" />
	<meta charset="UTF-8" name="viewport" content="width=device-width, initial-scale=1" />
</head>

<body>
	<nav class="navbar navbar-default">
		<div class="container-fluid">

		</div>
	</nav>
	<div class="col-md-3"></div>
	<div class="col-md-6 well">
		<h3 class="text-primary">PHP - Simple QR Code Generator</h3>
		<hr style="border-top:1px dotted #ccc;" />
		<div class="col-md-2"></div>
		<div class="col-md-8">
			<div class="form-group">
				<form method="POST">
					<input type="text" name="code" class="form-control" />
					<br>
					<button class="btn btn-primary form-control" name="generate">Generate</button>
				</form>

				<?php
				if (isset($_POST['generate'])) {//check the user click the generate button
					if ($_POST['code'] != "") {//check the user input field is not empty


				?>
						<img src="generate.php?code= <?php echo $_POST['code'] ?>" alt="">

				<?php
					}
				}
				?>
			</div>
		</div>
	</div>
</body>

</html>