<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, minimum-scale=1, maximum-scale=1, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Bakery view</title>
  <link rel="stylesheet" href="css\cssreset.css">
  <link rel="stylesheet" href="css\indexstyle.css">
  <link href="https://fonts.googleapis.com/css?family=Berkshire+Swash|Coiny|Orbitron" rel="stylesheet">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
  <script src="js\jquery.cycle2.js"></script>
</head>
<body>
 <div id="wrap">
  <info>
    <div class="info">
      <a href="index.html" id="info_logo">BakeryView</a>
      <div class="info_right">
       <a href=""><img src="" alt="login"></a>
       <a href=""><img src="" alt="menutoggle"></a>
      </div>
    </div>
  </info>
  <header>
    <div class="logo">
      <a href="index.html">Bakery View
      <div class="logo_desc">in the busan
      </div>
      </a>
    </div>
  </header>
  <main>
   <div class="section">
     <section class="search">
       <form action="search.php" method="post">
         <input type="search" placeholder="찾고싶은 베이커리는?" name="search">
       </form>
     </section>
     <div class="cycle-slideshow"
     data-cycle-fx="scrollHorz"
     data-cycle-pause-on-hover="true"
     data-cycle-speed="200"
     >
     <img src="images\bakery-1868925_960_720.jpg">
     <img src="images\bread-1761197__340.jpg">
     <img src="images\baked-goods-1867459__340.jpg">
     <img src="images\abundance-1868573__340.jpg">
 </div>
     <!--<section class="detail_search">
       <div class="detail_search_desc">
        지역별/제품별 검색
       </div>
       <div id="area_search_ex">ex) 부산 금정구 장전1동 유럽빵</div>
       <div class="area_search">
        <ul class="tab">
          <li><a href="index2.html">전체</a></li>
          <li><a href="#">전체</a></li>
          <li><a href="#">전체</a></li>
          <li><a href="#">제품</a></li>
        </ul>
        <div class="area_list">

        </div>
       </div>
     </section>
     <!-- <section class="story">
       <div class="story_contents">
         <div id="breadtour">
           <a href=""><img src="https://cdn.pixabay.com/photo/2016/11/29/05/07/baked-goods-1867459_960_720.jpg" alt="빵투어"></a>
           <P>빵투어</P>
         </div>
         <div>
           <a href=""><img src="https://cdn.pixabay.com/photo/2014/12/15/13/40/croissants-569075_960_720.jpg" alt="홈베이킹"></a>
           <p>홈베이킹</p>
         </div>
         <div id="bakery">
           <a href=""><img src="https://cdn.pixabay.com/photo/2014/12/13/21/05/bakery-567380_960_720.jpg" alt="베이커리소식"></a>
           <P>빵이야기</P>
         </div>
       </div>
     </section>-->
   </div>
  </main>
  <footer>
   <div class="footer">
     <a href="">개인정보처리방침</a>
     <a href="">소개</a>
   </div>
  </footer>
 </div>
</body>
</html>
