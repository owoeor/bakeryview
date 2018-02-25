<?php
  $_GET['id'] ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>
<style>
 .bestiem1 {
   float: left;
 }

</style>
<body>
  <div class=bestiem1><img src= "https://image.shutterstock.com/display_pic_with_logo/324901/522313201/stock-photo-freshly-baked-bread-isolated-on-white-background-522313201.jpg" width="400px">
  </div>
 <div class=form>
  <form action="bestitem.php" method="post" enctype="multipart/form-data">
    <input type="file" name="bestitemphoto">
    <input type="submit">
 </div>
  </form>
</body>
</html>
