<!DOCTYPE html>
<html lang="en">
<?php
  $search = $_POST['search'];
  $search = htmlspecialchars($search);
  $conn = mysqli_connect('localhost','root','rndwjs12','bakeryview');
  $sql = "SELECT*FROM bakery WHERE name LIKE '%".$search."%'";
  $result = mysqli_query($conn,$sql);
  $total = mysqli_num_rows($result);
?>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, minimum-scale=1, maximum-scale=1, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Bakery view</title>
  <link rel="stylesheet" href="css\cssreset.css">
  <link rel="stylesheet" href="css\search.css">
  <link href="https://fonts.googleapis.com/css?family=Nanum+Pen+Script|Nanum+Brush+Script|Orbitron" rel="stylesheet">
</head>
<body>
 <div id="wrap">
  <header>
      <div class="info_logo">
        <div class="menu">메뉴</div>
        <a href="index.php">BakeryView</a></div>
      <div class="search">
        <form action="search.php" method="post">
          <input type="search" placeholder="찾고싶은 베이커리는?" name="search"></div>
        </form>
  </header>
  <main>
    <?php
    if($total === 0){
      echo "베이커리 이름을 확인하세요!";
    }
    if($total === 1){
      header("Location:bakerypage.html");/*.php?<?id=$row['id']&name=......*/
    }
    /*if($total > 1){
      while($row = mysqli_fetch_assoc($result)){

      }
    }*/
     ?>

      <?php
      while($row = mysqli_fetch_assoc($result)){
         echo $row['name'].'<br>'.
           $row['address'].'<br>'.
          $row['ceosay'].'<br>';

      }
       ?>
  </main>
  <footer>

  </footer>
</body>
</html>
