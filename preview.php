<?php
include "check.php";
include "header.php";

/*** Update a student ***/
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
    $da = $_GET['date'];
    $no = $_GET['notes'];
}
?>

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="css/preview_style.css" />
    <title>Preview</title>
</head>

<body class="background-img">
    <!--Start Table -->
    <section class="uk-container" dir="rtl">
        <div>
            <div class="uk-card uk-card-primary uk-card-hover uk-card-small uk-width-1-3 uk-text-center uk-align-center uk-card-body uk-margin-top">
                <h4 class="uk-card-title">معلومات الطالبة</h4>
            </div>
        </div>
        <form class="uk-grid uk-margin" method="post">

            <div class="uk-width-1-6">
                <label class="uk-form-label" for="form-stacked-text">رقم الطالبة</label>
                <div class="uk-form-controls">
                    <input class="uk-input uk-text-center" name="text0" id="form-stacked-text" type="number" value="<?php echo $id ?>" readonly>
                </div>
            </div>
            <div class="uk-width-1-3">
                <label class="uk-form-label" for="form-stacked-text">الإسم الكامل</label>
                <div class="uk-form-controls">
                    <input class="uk-input" name="text1" id="form-stacked-text" type="text" value="<?php echo $fu ?>" readonly>
                </div>
            </div>
            <div class="uk-width-1-2">
                <label class="uk-form-label" for="form-stacked-text">اسم ولقب الولي</label>
                <div class="uk-form-controls">
                    <input class="uk-input" name="text6" id="form-stacked-text" type="text" value="<?php echo $el ?>" readonly>
                </div>
            </div>
            <div class="uk-width-1-4">
                <label class="uk-form-label" for="form-stacked-text">تاريخ الميلاد</label>
                <div class="uk-form-controls">
                    <input class="uk-input" name="text2" id="form-stacked-text" type="date" value="<?php echo $bi ?>" readonly>
                </div>
            </div>
            <div class="uk-width-1-4">
                <label class="uk-form-label" for="form-stacked-text">المستوى الدراسي</label>
                <div class="uk-form-controls">
                    <input class="uk-input" name="text4" id="form-stacked-text" type="text" value="<?php echo $ed ?>" readonly>
                </div>
            </div>
            <div class="uk-width-1-4">
                <label class="uk-form-label" for="form-stacked-text">رقم الهاتف</label>
                <div class="uk-form-controls">
                    <input class="uk-input" name="text7" id="form-stacked-text" type="text" value="<?php echo $ph1 ?>" readonly>
                </div>
            </div>
            <div class="uk-width-1-4">
                <label class="uk-form-label" for="form-stacked-text">رقم هاتف الولي</label>
                <div class="uk-form-controls">
                    <input class="uk-input" name="text8" id="form-stacked-text" type="text" value="<?php echo $ph2 ?>" readonly>
                </div>
            </div>
            <div class="uk-width-1-2">
                <label class="uk-form-label" for="form-stacked-text">مؤسسة الإنتماء</label>
                <div class="uk-form-controls">
                    <input class="uk-input" name="text3" id="form-stacked-text" type="text" value="<?php echo $es ?>" readonly>
                </div>
            </div>
            <div class="uk-width-1-2">
                <label class="uk-form-label" for="form-stacked-text">عنوان السكن</label>
                <div class="uk-form-controls">
                    <input class="uk-input" name="text5" id="form-stacked-text" type="text" value="<?php echo $ad ?>" readonly>
                </div>
            </div>
            <div class="uk-width-1-2">
                <label class="uk-form-label" for="form-stacked-text">ملاحظات</label>
                <div class="uk-form-controls">
                    <textarea class="uk-input notes_height" name="text9" id="form-stacked-text" readonly><?php echo $no ?></textarea>
                </div>
            </div>
            <div class="uk-width-1-4">
                <label class="uk-form-label" for="form-stacked-text">تاريخ الانخراط</label>
                <div class="uk-form-controls">
                    <input class="uk-input" name="text5" id="form-stacked-text" type="text" value="<?php echo $da ?>" readonly>
                </div>
            </div>
        </form>
    </section>

    <!-- End Table -->
</body>