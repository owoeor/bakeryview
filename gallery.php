<!doctype html>
<html>
    <head>
      <!-- 1. Link to jQuery (1.8 or later), -->
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script> <!-- 33 KB -->

<!-- fotorama.css & fotorama.js. -->
<link  href="http://cdnjs.cloudflare.com/ajax/libs/fotorama/4.6.4/fotorama.css" rel="stylesheet"> <!-- 3 KB -->
<script src="http://cdnjs.cloudflare.com/ajax/libs/fotorama/4.6.4/fotorama.js"></script> <!-- 16 KB -->

    </head>
    <body>
      <!-- 2. Add images to <div class="fotorama"></div>. -->

  <div class="fotorama"
       data-nav="thumbs">
       <?php
   $dir = "images";
   // Sort in ascending order - this is default
   $a = scandir($dir);
   $i = 2 ;
   while ($i<count($a)-1){
     $i = $i + 1 ;
     echo "<img src='images\\$a[$i]'>";
   }
   ?>

  </div>
    </body>
</html>
