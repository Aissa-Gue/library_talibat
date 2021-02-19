<?php
include "header.php";
include "check.php";

// Edit account
if (isset($_POST['editPwd'])) {
	$admin = $_POST['username'];

	$old_password = $_POST['oldPassword'];
	$old_password = md5($old_password);

	$password1 = $_POST['password1'];
	$password1 = md5($password1);

	$password2 = $_POST['password2'];
	$password2 = md5($password2);

	$sqlOld = "SELECT * from users WHERE password='$old_password'";
	$query1 = mysqli_query($conn, $sqlOld);
	if (mysqli_num_rows($query1) == 1) {
		if ($password1 == $password2) {
			$sql = "UPDATE users SET id='1',user_name='$admin',password='$password1' where password='$old_password'";
			if (mysqli_query($conn, $sql) and mysqli_affected_rows($conn) > 0) {
				echo "<script> alert('تم تغيير إعدادات الحساب بنجاح') </script>";
				echo "<script> window.location.href= 'login.php'</script>";
			}
		} else {
			echo "<script> alert('كلمة المرور الجديدتين غير متطابقتين') </script>";
			echo "<script> window.location.href= 'editAccount.php'</script>";
		}
	} else {
		echo "<script> alert('كلمة المرور القديمة غير صحيحة') </script>";
		echo "<script> window.location.href= 'editAccount.php'</script>";
	}
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
	<title>Edit Account</title>
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

	.uk-container-expand {
		margin-top: 0vh;
	}

	.container-login100 {
		margin-top: -5.7vh;
	}
	.container-login100 {
		height: 81.8vh;
	}
</style>

<body>
	<div class="limiter">
		<div class="container-login100">

			<div class="wrap-login100">
				<div class="login100-pic js-tilt" data-tilt>
					<img src="img/logo.JPG" alt="IMG">
				</div>

				<form class="login100-form validate-form" action="editAccount.php" method="post">
					<span class="login100-form-title">تغيير إعدادات المستخدم</span>

					<div class="wrap-input100 validate-input" data-validate="Password is required">
						<input class="input100" type="password" name="oldPassword" placeholder="كلمة المرور القديمة">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-lock" aria-hidden="true"></i>
						</span>
					</div>

					<div class="wrap-input100 validate-input">
						<input class="input100" type="text" name="username" placeholder="اسم المستخدم">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-user" aria-hidden="true"></i>
						</span>
					</div>

					<div class="wrap-input100 validate-input" data-validate="Password is required">
						<input class="input100" type="password" name="password1" placeholder="كلمة المرور الجديدة">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-lock" aria-hidden="true"></i>
						</span>
					</div>

					<div class="wrap-input100 validate-input" data-validate="Password is required">
						<input class="input100" type="password" name="password2" placeholder="تأكيد كلمة المرور">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-lock" aria-hidden="true"></i>
						</span>
					</div>

					<div class="container-login100-form-btn">
						<button name="editPwd" class="login100-form-btn">تعديل الحساب</button>
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




</body>

</html>