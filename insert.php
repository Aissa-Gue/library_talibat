<?php
include "check.php";
include "header.php";

// insert into a_students table
if (isset($_POST['insert'])) {
    $id = $_POST['id'];
    $fu = $_POST['text1'];
    $bi = $_POST['text2'];
    $es = $_POST['text3'];
    $ed = $_POST['text4'];
    $ad = $_POST['text5'];
    $el = $_POST['text6'];
    $ph1 = $_POST['text7'];
    $ph2 = $_POST['text8'];
    $no = $_POST['text9'];
    $da = $date;

    $sql = "INSERT into a_students values('$id','$fu','$bi','$es','$ed','$ad','$el','$ph1','$ph2','$no','$da')";
    if (mysqli_query($conn, $sql)) {
        echo "<script>alert('تم إضافة الطالبة: $fu بنجاح')</script>";
        echo '<script>window.location.href = "insert.php"</script>'; // redirect to insert.php
    } else {
        echo "<script>alert('فشلت عملية الإضافة')</script>";
        echo mysqli_error($conn);
        echo '<script>window.location.href = "insert.php"</script>'; // redirect to insert.php
    }
}

?>
<!DOCTYPE html>
<html lang="AR" dir="rtl">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <link rel="stylesheet" href="css/insert_style.css?v=<?php echo time(); ?>" />
    <title>insert</title>
</head>

<body class="background-img">
    <?php
    //get the last id from a_students table
    $lastIdQuery = "SELECT id FROM a_students ORDER BY id DESC LIMIT 1";
    $queryResult = mysqli_query($conn, $lastIdQuery);
    $last_id = mysqli_fetch_array($queryResult);
    ?>
    <!-- main page -->
    <section class="uk-container">
        <div>
            <div class="uk-card uk-card-primary uk-card-hover uk-card-small uk-width-1-3 uk-text-center uk-align-center uk-card-body uk-margin-top">
                <h4 class="uk-card-title">إضافة طالبة</h4>
            </div>
        </div>
        <form class="uk-grid uk-margin" action="insert.php" method="post">

            <div class="uk-width-1-6">
                <label class="uk-form-label" for="form-stacked-text">رقم الطالبة</label>
                <div class="uk-form-controls">
                    <input class="uk-input uk-text-center" name="id" id="form-stacked-text" type="number" value="<?php /*echo $last_id['id']+1 */ ?>" placeholder="أدخل رقم الطالبة" required>
                </div>
            </div>
            <div class="uk-width-1-3">
                <label class="uk-form-label" for="form-stacked-text">الإسم الكامل</label>
                <div class="uk-form-controls">
                    <input class="uk-input" name="text1" id="form-stacked-text" type="text" placeholder="أدخل الإسم الكامل للطالبة" required>
                </div>
            </div>
            <div class="uk-width-1-2">
                <label class="uk-form-label" for="form-stacked-text">اسم ولقب الولي</label>
                <div class="uk-form-controls">
                    <input class="uk-input" name="text6" id="form-stacked-text" type="text" placeholder="أدخل اسم ولقب الولي">
                </div>
            </div>
            <div class="uk-width-1-4">
                <label class="uk-form-label" for="form-stacked-text">تاريخ الميلاد</label>
                <div class="uk-form-controls">
                    <input class="uk-input" name="text2" id="form-stacked-text" type="date" required>
                </div>
            </div>
            <div class="uk-width-1-4">
                <label class="uk-form-label" for="form-stacked-text">المستوى الدراسي</label>
                <div class="uk-form-controls">
                    <input class="uk-input" name="text4" id="form-stacked-text" type="text" placeholder="أدخل المستوى الدراسي">
                </div>
            </div>
            <div class="uk-width-1-4">
                <label class="uk-form-label" for="form-stacked-text">رقم الهاتف</label>
                <div class="uk-form-controls">
                    <input class="uk-input" name="text7" id="form-stacked-text" type="text" placeholder="أدخل رقم الهاتف">
                </div>
            </div>
            <div class="uk-width-1-4">
                <label class="uk-form-label" for="form-stacked-text">رقم هاتف الولي</label>
                <div class="uk-form-controls">
                    <input class="uk-input" name="text8" id="form-stacked-text" type="text" placeholder="أدخل رقم هاتف الولي">
                </div>
            </div>
            <div class="uk-width-1-2">
                <label class="uk-form-label" for="form-stacked-text">مؤسسة الإنتماء</label>
                <div class="uk-form-controls">
                    <input class="uk-input" name="text3" id="form-stacked-text" type="text" placeholder="أدخل مؤسسة الانتماء">
                </div>
            </div>
            <div class="uk-width-1-2">
                <label class="uk-form-label" for="form-stacked-text">عنوان السكن</label>
                <div class="uk-form-controls">
                    <input class="uk-input" name="text5" id="form-stacked-text" type="text" placeholder="أدخل عنوان السكن">
                </div>
            </div>
            <div class="uk-width-1-2">
                <label class="uk-form-label" for="form-stacked-text">ملاحظات</label>
                <div class="uk-form-controls">
                    <textarea class="uk-input notes_height" name="text9" id="form-stacked-text" placeholder="أدخل ملاحظات حول الطالبة"></textarea>
                </div>
            </div>
            <div class="uk-width-1-2 uk-margin uk-text-center">
                <input type="submit" name="insert" value="إضافة" class="uk-button uk-button-danger uk-width-1-3" onclick="return confirm('هل تريد إضافة الطالبة؟');">
            </div>
        </form>
    </section>
    <!-- end main page -->
</body>

</html>