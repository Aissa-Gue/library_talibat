<?php
include "check.php";
include "header.php";

?>

<!DOCTYPE html>
<html lang="AR">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <link rel="stylesheet" href="css/search_style.css?v=<?php echo time(); ?>" />
    <title>search</title>
</head>

<body class="uk-container-expand background-img">
    <div class="uk-text-center uk-margin">
        <form action="search.php" method="POST">
            <button class="uk-button uk-button-primary" name="submitS">بحث</button>
            <input class="uk-input uk-width-1-3 uk-text-center" name="id" type="text" placeholder="أدخل رقم أو إسم الطالبة">
        </form>
    </div>
    <section class="uk-container">
        <div class="uk-overflow-auto">
            <?php

            /*** Search in a_students ***/
            if (isset($_POST['submitS'])) {
                $a = $_POST['id'];

                $sql1 = "SELECT * FROM a_students WHERE full_name LIKE '%$a%'";
                $sql2 = "SELECT * FROM a_students WHERE id= '$a'";
                $result1 = mysqli_query($conn, $sql1);
                $result2 = mysqli_query($conn, $sql2);

                if (mysqli_num_rows($result1) > 0 or mysqli_num_rows($result2) > 0) {
            ?>
                    <table class="uk-table uk-table-hover uk-table-middle uk-table-divider">
                        <thead class="table_head">
                            <tr>
                                <th class="uk-table-shrink">حذف</th>
                                <th class="uk-table-shrink">تعديل</th>
                                <th class="uk-table-shrink">طباعة</th>
                                <th class="uk-table-shrink">عرض</th>
                                <th class="uk-table-expand">تاريخ الميلاد</th>
                                <th class="uk-width-large">الاسم واللقب</th>
                                <th class="uk-table-shrink uk-text-nowrap">رقم الطالبة</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            // preview data of each row
                            while ($row = mysqli_fetch_array($result1) or $row = mysqli_fetch_array($result2)) {
                            ?>
                                <tr class="uk-text-center">
                                    <td><a href="delete_student.php?id=<?php echo $row['id'] ?>&name=<?php echo $row['full_name']; ?>" onclick="return confirm('هل تريد بالتأكيد حذف الطالبة؟');"><img class="uk-preserve-width uk-border-circle" src="icons/delete.png" width="30" alt=""></a></td>

                                    <td><a href="update.php?id=<?php echo $row['id']; ?>&name=<?php echo $row['full_name']; ?>&birthdate=<?php echo $row['birth_date']; ?>&establishment=<?php echo $row['establishment']; ?>&level=<?php echo $row['education_level']; ?>&address=<?php echo $row['address']; ?>&el_wali=<?php echo $row['el_wali']; ?>&phone_nbr1=<?php echo $row['phone_nbr1']; ?>&phone_nbr2=<?php echo $row['phone_nbr2']; ?>&notes=<?php echo $row['notes']; ?>" onclick="return confirm('هل تريد بالتأكيد التعديل؟');"><img class="uk-preserve-width uk-border-circle" src="icons/edit.png" width="30" alt=""></a></td>

                                    <td><a href="print.php?id=<?php echo $row['id']; ?>&name=<?php echo $row['full_name']; ?>&birthdate=<?php echo $row['birth_date']; ?>&establishment=<?php echo $row['establishment']; ?>&level=<?php echo $row['education_level']; ?>"><img class="uk-preserve-width uk-border-circle" src="icons/print.png" width="30" alt=""></a></td>

                                    <td><a href="preview.php?id=<?php echo $row['id']; ?>&name=<?php echo $row['full_name']; ?>&birthdate=<?php echo $row['birth_date']; ?>&establishment=<?php echo $row['establishment']; ?>&level=<?php echo $row['education_level']; ?>&address=<?php echo $row['address']; ?>&el_wali=<?php echo $row['el_wali']; ?>&phone_nbr1=<?php echo $row['phone_nbr1']; ?>&phone_nbr2=<?php echo $row['phone_nbr2']; ?>&date=<?php echo $row['date'] ?>&notes=<?php echo $row['notes']; ?>"><img class="uk-preserve-width uk-border-circle" src="icons/preview.png" width="30" alt=""></a></td>

                                    <td class="uk-table-link"><?php echo $row["birth_date"] ?></td>

                                    <td class="uk-text-truncate"><?php echo $row["full_name"] ?></td>

                                    <td class="uk-text-nowrap"><?php echo $row["id"] ?></td>
                        <?php
                            }
                        } else {
                            echo "<script>alert('لا توجد نتائج')</script>";
                        }
                    }
                        ?>
                                </tr>
                        </tbody>
                    </table>
        </div>
    </section>
</body>

</html>