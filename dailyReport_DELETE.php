<html lang="AR">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <link rel="stylesheet" href="css/search_style.css?v=<?php echo time() ?>" />
    <link rel="stylesheet" href="fonts/googleFonts.css?v=<?php echo time() ?>">
    <style>
        .img-div {
            margin-top: -2.4%;
        }
    </style>
</head>

<body class="background-img">

    <?php
    include "check.php";
    include "header.php";
    //get daily report
    if (isset($_GET['rep'])) {
        $query = "SELECT a_students.id, a_students.full_name, a_students.birth_date, b_report.c_date, b_report.enter_time, b_report.exit_time FROM a_students, b_report WHERE a_students.id = b_report.id and b_report.c_date = current_date()";
        $result = mysqli_query($conn, $query);
    ?>
        <h1 class="info-title">تقرير اليوم</h1>
        <table class="dr-table">
            <tr>
                <td class="th"><strong>وقت الخروج</strong></td>
                <td class="th"><strong>وقت الدخول</strong></td>
                <td class="th" id="birth_date"><strong>تاريخ الميلاد</strong></td>
                <td class="th"><strong>الإسم الكامل</strong></td>
                <td class="th" id="id"><strong>رقم الطالبة</strong></td>
            </tr>
            <?php
            while ($row = mysqli_fetch_array($result)) {
            ?>
                <tr>
                    <td><?php echo $row['exit_time'] ?></td>
                    <td><?php echo $row['enter_time'] ?></td>
                    <td id="birth_date"><?php echo $row['birth_date'] ?></td>
                    <td><?php echo $row['full_name'] ?></td>
                    <td id="id"><?php echo $row['id'] ?></td>
                </tr>
        <?php
            }
        }
        ?>
        </table>
</body>

</html>