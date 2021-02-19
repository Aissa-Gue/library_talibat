<?php
include "check.php";

/*** Delete a student from a_students table ***/
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $fu = $_GET['name'];

    $sql = "DELETE from a_students WHERE id=$id";
    if (mysqli_query($conn, $sql)) {
        echo "<script> alert('تم حذف الطالبة $fu بنجاح') </script>";
        echo "<script> window.location.href= 'search.php'</script>";
    } else {
        echo "<script> alert('حدثت مشكلة: لم يتم الحذف!!') </script>";
        echo "<script> window.location.href= 'search.php'</script>";
    }
}
