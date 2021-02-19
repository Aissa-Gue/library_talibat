<?php
include "header.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<title>Library Login</title>
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

				<form class="login100-form validate-form" action="check.php" method="post">
					<span class="login100-form-title">تسجيل الدخول</span>

					<div class="wrap-input100 validate-input">
						<input class="input100" type="text" name="username" placeholder="اسم المستخدم">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-user" aria-hidden="true"></i>
						</span>
					</div>

					<div class="wrap-input100 validate-input" data-validate="Password is required">
						<input class="input100" type="password" name="password" placeholder="كلمة المرور">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-lock" aria-hidden="true"></i>
						</span>
					</div>

					<div class="container-login100-form-btn">
						<button name="login" class="login100-form-btn">دخول</button>
					</div>

					<div class="text-center p-t-12">
						<span class="txt1">إعادة تعيين</span>
						<a class="txt2" href="editAccount.php">اسم المستخدم / كلمة المرور؟</a>
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
	</style>

</body>

</html>