<?php
include 'connection.php';

if (!isset($_SESSION)) {
  session_start();
}

if (isset($_POST['login'])) {
  $admin = $_POST['username'];

  $password = $_POST['password'];
  $password = md5($password);

  $sql = "SELECT * from users where user_name= '$admin' and password= '$password'";
  $query = mysqli_query($conn, $sql);
  if (mysqli_num_rows($query) == 1) {
    //if admin
    $_SESSION['user'] = $admin;
    header('location: index.php');
  } else {
    //if not admin
    echo 'Failed to connect to database' . mysqli_connect_error();
    echo "<script> 
              alert('اسم المستخدم أو كلمة المرور غير صحيحة'); 
              window.location.href= 'login.php'
          </script>";
  }
}


/*** redirect to login page if session not exist ***/
if (!isset($_SESSION['user'])) {
  echo "<script> window.location.href= 'login.php'</script>";
}

/*** redirect to login If admin inactive for more than 2.5 houres ***/
if (!isset($_SESSION['timestamp'])) {
  $_SESSION['timestamp'] = time();
}
if (time() - $_SESSION['timestamp'] > 9000) { //subtract new timestamp from the old one
  session_unset(); // unset $_SESSION variable for this page
  session_destroy(); // destroy session data
  echo "<script> window.location.href= 'login.php'</script>";
  exit;
} else {
  $_SESSION['timestamp'] = time(); //set new timestamp
}
