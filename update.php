<?php
include "check.php";
include "header.php";
/*** Update DB ***/
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $fu = $_GET['name'];
    $bi = $_GET['birthdate'];
    $es = $_GET['establishment'];
    $ed = $_GET['level'];
    $ad = $_GET['address'];
    $el = $_GET['el_wali'];
    $ph1 = $_GET['phone_nbr1'];
    $ph2 = $_GET['phone_nbr2'];
    $no = $_GET['notes'];
}

//update records
if (isset($_POST['update'])) {
    $prevId = $_POST['prev'];
    $id = $_POST['text0'];
    $fu = $_POST['text1'];
    $bi = $_POST['text2'];
    $es = $_POST['text3'];
    $ed = $_POST['text4'];
    $ad = $_POST['text5'];
    $el = $_POST['text6'];
    $ph1 = $_POST['text7'];
    $ph2 = $_POST['text8'];
    $no = $_POST['text9'];

    $update = "UPDATE a_students SET id='$id', full_name='$fu', birth_date='$bi', establishment='$es', education_level='$ed', address='$ad', el_wali='$el', phone_nbr1='$ph1', phone_nbr2='$ph2', notes='$no' WHERE id='$prevId'";

    if (mysqli_query($conn, $update) and mysqli_affected_rows($conn) > 0) {
        echo "<script> alert('تم تعديل الطالبة: $fu بنجاح!') </script>";
    } else {
        echo "<script> alert('فشلت عملية التعديل!') </script>";
    }
}
?>

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <link rel="stylesheet" href="css/insert_style.css" />
    <link rel="stylesheet" href="fonts/googleFonts.css">
    <title>Update</title>
</head>

<body class="background-img" dir="rtl">
    <!-- main page -->
    <section class="uk-container">
        <div>
            <div class="uk-card uk-card-primary uk-card-hover uk-card-small uk-width-1-3 uk-text-center uk-align-center uk-card-body uk-margin-top">
                <h4 class="uk-card-title">تحديث الطالبة</h4>
            </div>
        </div>
        <form class="uk-grid uk-margin" action="update.php" method="post">

            <div class="uk-width-1-6">
                <label class="uk-form-label" for="form-stacked-text">رقم الطالبة</label>
                <div class="uk-form-controls">
                    <input class="uk-input" name="prev" id="form-stacked-text" type="hidden" value="<?php echo $id ?>">
                    <input class="uk-input uk-text-center" name="text0" id="form-stacked-text" type="text" value="<?php echo $id ?>">
                </div>
            </div>
            <div class="uk-width-1-3">
                <label class="uk-form-label" for="form-stacked-text">الإسم الكامل</label>
                <div class="uk-form-controls">
                    <input class="uk-input" name="text1" id="form-stacked-text" type="text" value="<?php echo $fu ?>">
                </div>
            </div>
            <div class="uk-width-1-2">
                <label class="uk-form-label" for="form-stacked-text">اسم ولقب الولي</label>
                <div class="uk-form-controls">
                    <input class="uk-input" name="text6" id="form-stacked-text" type="text" value="<?php echo $el ?>">
                </div>
            </div>
            <div class="uk-width-1-4">
                <label class="uk-form-label" for="form-stacked-text">تاريخ الميلاد</label>
                <div class="uk-form-controls">
                    <input class="uk-input" name="text2" id="form-stacked-text" type="date" value="<?php echo $bi ?>">
                </div>
            </div>
            <div class="uk-width-1-4">
                <label class="uk-form-label" for="form-stacked-text">المستوى الدراسي</label>
                <div class="uk-form-controls">
                    <input class="uk-input" name="text4" id="form-stacked-text" type="text" value="<?php echo $ed ?>">
                </div>
            </div>
            <div class="uk-width-1-4">
                <label class="uk-form-label" for="form-stacked-text">رقم الهاتف</label>
                <div class="uk-form-controls">
                    <input class="uk-input" name="text7" id="form-stacked-text" type="text" value="<?php echo $ph1 ?>">
                </div>
            </div>
            <div class="uk-width-1-4">
                <label class="uk-form-label" for="form-stacked-text">رقم هاتف الولي</label>
                <div class="uk-form-controls">
                    <input class="uk-input" name="text8" id="form-stacked-text" type="text" value="<?php echo $ph2 ?>">
                </div>
            </div>
            <div class="uk-width-1-2">
                <label class="uk-form-label" for="form-stacked-text">مؤسسة الإنتماء</label>
                <div class="uk-form-controls">
                    <input class="uk-input" name="text3" id="form-stacked-text" type="text" value="<?php echo $es ?>">
                </div>
            </div>
            <div class="uk-width-1-2">
                <label class="uk-form-label" for="form-stacked-text">عنوان السكن</label>
                <div class="uk-form-controls">
                    <input class="uk-input" name="text5" id="form-stacked-text" type="text" value="<?php echo $ad ?>">
                </div>
            </div>
            <div class="uk-width-1-2">
                <label class="uk-form-label" for="form-stacked-text">ملاحظات</label>
                <div class="uk-form-controls">
                    <textarea class="uk-input notes_height" name="text9" id="form-stacked-text"><?php echo $no ?></textarea>
                </div>
            </div>
            <div class="uk-width-1-2 uk-margin uk-text-center">
                <input type="submit" name="update" value="تحديث" class="uk-button uk-button-danger uk-width-1-3" onclick="return confirm('هل تريد تحديث الطالبة؟')">
            </div>
        </form>
    </section>
    <!-- end main page -->