<?php
include "header.php";
?>
<!DOCTYPE html>
<html lang="ar">

<head>
	<title>Import DB</title>
	<meta charset="UTF-8">

	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css?v=<?php echo time() ?>">
	<link rel="stylesheet" type="text/css" href="css/main.css?v=<?php echo time() ?>">
	<!--===============================================================================================-->
</head>
<style>
	.uk-container-expand {
		margin-top: 0vh;
	}
</style>

<body>

	<div class="limiter">
		<div class="container-login100">

			<div class="wrap-login100">
				<div class="login100-pic js-tilt" data-tilt>
					<img src="img/logo.JPG" alt="IMG">
				</div>

				<form action="import.php" method="post" enctype="multipart/form-data" class="login100-form validate-form">
					<br><br>
					<span class="login100-form-title">أدخل قاعدة البيانات</span>

					<div class="wrap-input100 validate-input">
						<input type="file" name="db" accept=".sql" id="file-input" class="input100" required>
						<span class="focus-input100"></span>
					</div>

					<div class="container-login100-form-btn">
						<input type="submit" name="upload" value="إدخال" class="login100-form-btn" onclick="return confirm('انتبه !! هل تريد بالتأكيد إدخال قاعدة البيانات؟')">
					</div>
				</form>
			</div>
		</div>
	</div>

	<!--===============================================================================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
	<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
	<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
	<!--===============================================================================================-->
	<script src="vendor/tilt/tilt.jquery.min.js"></script>
	<script>
		$('.js-tilt').tilt({
			scale: 1.1
		})
	</script>
	<!--===============================================================================================-->
	<script src="js/main.js"></script>


	<style media="screen">
		.img-div {
			margin-bottom: 0vh;
		}

		input,
		span {
			direction: rtl;
		}

		i {
			margin-right: 15px;
		}

		#file-input {
			color: red;
			padding: 8px;
		}
	</style>

</body>

</html>