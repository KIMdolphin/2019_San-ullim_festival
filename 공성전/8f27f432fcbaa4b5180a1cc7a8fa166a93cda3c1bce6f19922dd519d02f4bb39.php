// 공성전 2팀
<!DOCTYPE html>
<html >
  <head>
    <meta charset="utf-8">
    <link href="css/main.css" rel="stylesheet" />
    <script src="lib/jquery/jquery-3.3.1.min.js"></script>
    <script src="lib/bootstrap/dist/js/bootstrap.min.js"></script>
    <link href="lib/bootstrap/dist/css/bootstrap.css" rel="stylesheet" />
    <title>공성전 2팀 확인 페이지</title>
  </head>
  <body>
    <center>
    <video id="video" preload="auto" autoplay="true" loop="loop" muted="muted" volume="0">
      <source src="background/twofire.mp4">
    </video>
    <br><br>
    <img src="img/team2.png" alt="Team 2" width=10%, height=10% ><br>
    <infor>현재 점수 안내</infor><br>
    <?php
    require $_SERVER["DOCUMENT_ROOT"].'/scripts/dbconnect.php';
    $connect = DBConnect();

    $result = mysqli_query($connect, "select * from score where team='2'");
    $row = mysqli_fetch_array($result);

    echo "<inforr> 지금 ".$row['roundnow']."라운드를 진행하고 있습니다. </inforr>";
    ?>
    <br><br>
    <?php
    $result = mysqli_query($connect, "select * from score where team='2'");
    $row = mysqli_fetch_array($result);
    echo "<div class='container'>";
    echo "<div class='col-sm-11'>";
    echo "<table class='table table-hover table-dark'>
          <tr class='active'>
          <th ><center>TEAM NO.</th>
          <th ><center>round 1</th>
          <th ><center>round 2</th>
          <th ><center>round 3</th>
          <th ><center>round 4</th>
          <th ><center>round 5</th>
          <th ><center>round 6</th>
          <th ><center>등수</th>
          </tr>";
      if ($row[1] == 3 || $row[1] == 6){
        $result = mysqli_query($connect, 'select * from score where True');
        while ($row2 = mysqli_fetch_array($result)){
          echo "<tr class='active'>";
          echo "<td ><center>" . $row2[0] . "</td>";
          echo "<td ><center>" . $row2[2] . "</td>";
          echo "<td ><center>" . $row2[3] . "</td>";
          echo "<td ><center>" . $row2[4] . "</td>";
          echo "<td ><center>" . $row2[5] . "</td>";
          echo "<td ><center>" . $row2[6] . "</td>";
          echo "<td ><center>" . $row2[7] . "</td>";
          echo "<td ><center>" . $row2[8] . "</td>";
          echo "</tr>";
        }
        echo "</table>";
      }
      else{
        echo "<tr class='active'>";
        echo "<td><center>" . $row[0] . "</td>";
        echo "<td><center>" . $row[2] . "</td>";
        echo "<td><center>" . $row[3] . "</td>";
        echo "<td><center>" . $row[4] . "</td>";
        echo "<td><center>" . $row[5] . "</td>";
        echo "<td><center>" . $row[6] . "</td>";
        echo "<td><center>" . $row[7] . "</td>";
        echo "<td><center>" . $row[8] . "</td>";
        echo "</tr>";
        echo "</table>";
      }
      echo "</div>";
      echo "</div>";
      mysqli_close($connect);
    ?>
  </body>
</html>
