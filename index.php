<?php
include "check.php";
include "header.php";

//get daily report
$query = "SELECT a_students.id, a_students.full_name, a_students.birth_date, b_report.no, b_report.c_date, b_report.enter_time, b_report.exit_time FROM a_students, b_report WHERE a_students.id = b_report.id and b_report.c_date = current_date() ORDER BY `enter_time` ASC, `no` ASC";
$result = mysqli_query($conn, $query);

?>
<!DOCTYPE html>
<html lang="AR">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="css/uikit.css" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <link rel="stylesheet" href="css/index_style.css?v=<?php echo time() ?>" />
    <link rel="stylesheet" href="fonts/googleFonts.css?v=<?php echo time() ?>">
    <title>index</title>
</head>

<body class="uk-container-expand background-img">
    <!--Start Navbar-->
    <nav class="uk-navbar-container" uk-navbar>

        <div class="uk-navbar-left">
            <ul class="uk-navbar-nav">
                <li>
                    <a class="uk-navbar-toggle" uk-navbar-toggle-icon href="#"></a>
                    <div class="uk-navbar-dropdown">
                        <ul class="uk-nav uk-navbar-dropdown-nav uk-text-right" dir="rtl">
                            <li><a href="logout.php"><span class="uk-icon-link" uk-icon="sign-out"></span> تسجيل الخروج</a></li>
                            <li><a href="editAccount.php"><span class="uk-icon-link" uk-icon="user"></span> إعدادات الحساب </a></li>
                            <li><a href="importDbForm.php"><span class="uk-icon-link" uk-icon="upload"></span>استيراد ق.ب </a></li>
                            <li><a href="export.php"><span class="uk-icon-link" uk-icon="download"></span> استخراج ق.ب </a></li>


                        </ul>
                    </div>
                </li>
                <li><a href="search.php" class="uk-icon-link" uk-icon="search"></a></li>
                <li class="uk-active"><a href="insert.php" class="uk-icon-link" uk-icon="plus"></a></li>
            </ul>
        </div>

        <div class="uk-navbar-right">
            <div class="uk-navbar-item">
                <form action="report.php" method="post" dir="rtl">
                    <input class="uk-input uk-form-width-medium uk-text-center" type="number" name="student_nbr" placeholder="أدخل رقم الطالبة" required>
                    <button class="uk-button uk-button-primary" name="enter">دخول</button>
                    <button class="uk-button uk-button-danger" name="exit">خروج</button>
                </form>
            </div>
        </div>
    </nav>
    <!--End Navbar-->

    <!--Start Table -->
    <table class="uk-table uk-table-hover uk-table-divider">
        <thead class="uk-background-primary">
            <tr>
                <th class="uk-width-small">حذف الحضور</th>
                <th class="uk-width-small">وقت الخروج</th>
                <th class="uk-width-small">وقت الدخول</th>
                <th class="uk-width-medium">تاريخ الميلاد</th>
                <th class="uk-width-large">اسم الطالبة</th>
                <th class="uk-width-small">رقم الطالبة</th>
            </tr>
        </thead>
        <tbody>
            <?php
            while ($row = mysqli_fetch_array($result)) {
            ?>
                <tr class="uk-text-center">
                    <td class="uk-width-small uk-text-center">
                        <a onclick="return confirm('هل تريد بالتأكيد حذف الحضور؟')" href="report.php?log=<?php echo $row['no'] ?>" style="color: #ff0066">
                            <span uk-icon="icon: trash; ratio: 1.2"></span>
                        </a>
                    </td>
                    <td class="uk-width-small uk-text-center"><?php echo $row['exit_time'] ?></td>
                    <td class="uk-width-small uk-text-center"><?php echo $row['enter_time'] ?></td>
                    <td class="uk-width-medium uk-text-center"><?php echo $row['birth_date'] ?></td>
                    <td class="uk-width-large"><?php echo $row['full_name'] ?></td>
                    <td class="uk-width-small uk-text-center"><?php echo $row['id'] ?></td>
                </tr>
            <?php
            }
            if (mysqli_num_rows($result) == 0) {
                echo '<td class="uk-width-small uk-text-center"></td>
        <td class="uk-width-small uk-text-center"></td>
        <td class="uk-width-small uk-text-center large_height"></td>
        <td class="uk-width-medium uk-text-center">لا وجود لطالبات حاليا</td>
        <td class="uk-width-large"></td>
        <td class="uk-width-small uk-text-center"></td>';
            }
            ?>
        </tbody>
    </table>
    <!-- End Table -->
</body>

<script src="js/uikit.min.js"></script>
<script src="js/uikit-icons.min.js"></script>

<!-- BLOCK ENTER BUTTON -->
<script type="text/javascript">
    $(document).ready(function() {
        $(window).keydown(function(event) {
            if (event.keyCode == 13) {
                event.preventDefault();
                return false;
            }
        });
    });
</script>

</html>