<?php
include "check.php";

/*** Get the name of student ***/
$fu = "";
if (isset($_POST['enter']) || isset($_POST['exit'])) {
  $id = $_POST['student_nbr'];
  $query = "SELECT full_name FROM a_students WHERE id= '$id'";
  $res = mysqli_query($conn, $query);
  $row = mysqli_fetch_array($res);
  global $fu;
  $fu = $row['full_name'];
}

/*** insert into b_report (enter) ***/
if (isset($_POST['enter'])) {
  $id = $_POST['student_nbr'];
  $da = $date;
  $en = date("H:i");
  $ex = "";

  $sql = "INSERT INTO b_report values ('0','$id','$da','$en','$ex')";
  if (mysqli_query($conn, $sql)) {
    echo "<script> alert('تم تسجيل دخول الطالبة: $fu بنجاح') </script>";
    echo '<script>window.location.href = "index.php"</script>';
  } else {
    echo "<script> alert('فشلت عملية تسجيل الدخول') </script>";
    echo mysqli_error($conn);
    echo '<script>window.location.href = "index.php"</script>';
  }
}

/*** insert into b_report (exit) ***/
if (isset($_POST['exit'])) {
  $id = $_POST['student_nbr'];
  $da = $date;
  $ex = date("H:i");

  //test if id not exist or not entred yet
  $test = "SELECT * from b_report WHERE id='$id' and exit_time = '' LIMIT 1";
  $testQuery = mysqli_query($conn, $test);

  // set exit time
  $sql = "UPDATE b_report SET exit_time='$ex' WHERE c_date='$da' and id='$id' ORDER BY `no` DESC LIMIT 1";
  mysqli_query($conn, $sql);

  if (mysqli_num_rows($testQuery) > 0 and mysqli_affected_rows($conn) > 0) {
    echo "<script> alert('تم تسجيل خروج الطالبة: $fu بنجاح') </script>";
    echo '<script>window.location.href = "index.php"</script>';
  } else {
    echo "<script> alert('فشلت عملية تسجيل الخروج') </script>";
    echo mysqli_error($conn);
    echo '<script>window.location.href = "index.php"</script>';
  }
}

/*** Delete presence row from log table / index.php ***/
if (isset($_GET['log'])) {
  $no = $_GET['log'];
  $sql = "DELETE from b_report WHERE no= '$no'";
  if (mysqli_query($conn, $sql)) {
    echo '<script>window.location.href = "index.php"</script>';
  } else {
    echo "<script> alert('فشلت عملية الحذف !') </script>";
  }
}
