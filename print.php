<?php
include "check.php";

//disable validation of form by the browser
header('Cache-Control: no cache');

/*** GET values from search.php ***/
if (isset($_GET['id'])) {
  $id = $_GET['id'];
  $fu = $_GET['name'];
  $bi = $_GET['birthdate'];
  $es = $_GET['establishment'];
  $ed = $_GET['level'];
}


?>

<html lang="ar">

<head>
  <link rel="stylesheet" href="css/print_style.css?v=<?php echo time(); ?>" />
  <link rel="stylesheet" href="fonts/googleFonts.css">
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>المكتبة المركزية - مكتبة الطالبات</title>
</head>

<body>
  <h1>تقرير الطالبة</h1>
  <div class="global_div">
    <div class="first_block">
      <h2><span>الطالبة: </span>&nbsp <?php echo $fu ?></h2>
      <h2><span>تاريخ الميلاد: </span>&nbsp <?php echo $bi ?></h2>
    </div>
    <div class="second_block">
      <h2><span>المؤسسة: </span>&nbsp <?php echo $es ?></h2>
      <h2><span>المستوى الدراسي: </span>&nbsp <?php echo $ed ?></h2>
    </div>
  </div>
  <div class="input_div">
    <form action="print.php?id=<?php echo $id ?>&name=<?php echo $fu ?>&birthdate=<?php echo $bi ?>&establishment=<?php echo $es ?>&level=<?php echo $ed ?>" method="post">

      <label for="start_date" id="start_label">من:</label>
      <span id="from">
        <input type="date" name="start_date" id="start_input" required />
      </span>

      <label for="end_date" id="end_label">إلى:</label>
      <span id="to">
        <input type="date" name="end_date" id="end_input" required />
      </span>

      <input type="submit" name="submitP" value="بحث" id="submit" />
    </form>
  </div>

  <?php
  /*** Show raws between two dates ***/
  if (isset($_POST['submitP'])) {
    $start_date = $_POST['start_date'];
    $end_date = $_POST['end_date'];

    $sql = "SELECT * from b_report WHERE id= $id and c_date between '$start_date' and '$end_date'";
    $rec = mysqli_query($conn, $sql);

    if (mysqli_num_rows($rec) > 0) {
  ?>
      <table class="table">
        <tr>
          <th class="th_date">التاريخ</th>
          <th class="th">وقت الدخول</th>
          <th class="th">وقت الخروج</th>
        </tr>
        <?php
        while ($record = mysqli_fetch_array($rec)) {
          $no = $record['no'];
          $date = $record['c_date'];
          $en_time = $record['enter_time'];
          $ex_time = $record['exit_time'];
        ?>
          <tr>
            <th class="td_date"><?php echo $date ?> </th>
            <td class="td"> <?php echo $en_time ?></td>
            <td class="td"><?php echo $ex_time ?></td>
            <td id="delete">
              <a onclick="return confirm('هل تريد بالتأكيد حذف هذا الصف؟');" href="report.php?log=<?php echo $no ?>"><img id="del_icon" src='./icons/delete.png' alt='delete' id='icon_img' /></a>
            </td>
          </tr>

          <script type="text/javascript">
            document.getElementById("from").innerHTML = "<?php echo $start_date ?>";
            document.getElementById("to").innerHTML = "<?php echo $end_date ?>";
            document.getElementById("submit").style.display = "none";
          </script>
    <?php
        }
      } else {
        echo "<br><h3 id='no_result'>لا توجد نتائج</h3>";
      }
    }
    ?>
      </table>
      <a href="index.php" class="home" id="homeBtn"><img src="./icons/home.png" alt="home" class="icon" /></a>
      <a href="search.php" class="search" id="searchBtn"><img src="./icons/search.png" alt="search" class="icon" /></a>
      <a href="" class="print" id="printBtn"><img src="./icons/print.png" alt="print" class="icon" /></a>

      <script type="text/javascript">
        //Hide print btn an show print window
        document.getElementById("printBtn").onclick = function() {
          document.getElementById("printBtn").style.display = "none";
          document.getElementById("searchBtn").style.display = "none";
          document.getElementById("homeBtn").style.display = "none";
          window.print();
        }
      </script>
</body>

</html>