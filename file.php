<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
$dir = "images";
// Sort in ascending order - this is default
$a = scandir($dir);
$i = 3 ;
while ($i<count($a)-1){

  $i = $i + 1 ;
  echo "<img src='images\\$a[$i]'>";
}
?>
  </body>
</html>
