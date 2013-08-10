<!DOCTYPE html>
<html lang="en">
<?php require_once("inc/header.php");?>
<body>
<div class="container outercontainer shadow">
  <?php require_once("inc/nav.php");?>
    <div class="clearfix"></div>
  </div>
  <div class="container-fluid">
    <div class="row-fluid">
      <div class="span12"> 
        <!-- Carousel
    ================================================== -->
        <div id="myCarousel" class="carousel slide boxshadow">
          <div class="carousel-inner">
            <div class="item active"> <img src="./Carousel_files/slide-01.jpg" alt="" usemap="#01map"> </div>
            <!--<div class="item"> <img src="./Carousel_files/slide-02.jpg" alt=""> </div>-->
            <div class="item"> <img src="./Carousel_files/slide-03.jpg" alt="" usemap="#03map"> </div>
            <div class="item"> <img src="./Carousel_files/slide-04.jpg" alt="" usemap="#04map"> </div>
          </div>
        </div>
        <map name="01map">
          <area shape="circle" coords="140,140,100" href="#" alt="Find Out More" title="Find out more">
        </map>
        <map name="03map">
          <area shape="rect" coords="400,100,500,300" href="#" alt="Where to buy" title="Where to buy">
        </map>
        <map name="04map">
          <area shape="rect" coords="400,100,500,300" href="#" alt="Read our story" title="Read our story">
        </map>
        <!-- /.carousel -->
        <div class="row-fluid favourites">
          <div class="span4" id="favHeader">
            <h4>OUR FAVOURITES</h4>
          </div>
          <div class="clearfix"></div>
          <ul id="flip">
            <li>
              <div> <img src="img/fav2.png" />
                <div class="title"> <span class="fav-product-heading">Palatina Coolers</span><br />
                  <span class="fav-product-detail">AVAILABLE IN 6 COLORS</span> </div>
              </div>
            </li>
            <li class="center">
              <div> <img src="img/fav1.png" />
                <div class="title"> <span class="fav-product-heading">Tre Sensi</span><br />
                  <span class="fav-product-detail">WINE TASTING GLASS</span> </div>
              </div>
            </li>
            <li>
              <div> <img src="img/fav3.png" />
                <div class="title"> <span class="fav-product-heading">Sorgente Tumblers</span><br />
                  <span class="fav-product-detail">AVAILABLE IN 9 COLORS</span> </div>
              </div>
            </li>
          </ul>
          <a class="left carousel-control" id="prev2" href="#myCarousel">‹</a> <a class="right carousel-control" id="next2" href="#myCarousel">›</a> 
          <!--/span--> 
        </div>
        <!--/row--> 
      </div>
      <!--/span--> 
    </div>
    <!--/row--> 
    
  </div>
  <?php require_once("inc/footer.php"); ?>
  <!--/.fluid-container--> 
</div>
<?php require_once("inc/js.php"); ?>
<script>
        !function ($) {
            $(function () {
                $('#myCarousel').carousel();
                $('#flip').carouFredSel({
                    auto: false,
                    width: 960,
                    height: 250,
                    items: {
                        visible: 3,
                        minimum: 3,
                        width: "variable",
                        height: "variable"
                    },
                    prev: '#prev2',
                    next: '#next2',
                    mousewheel: true,
                    swipe: {
                        onMouse: true,
                        onTouch: true
                    }
                });
            })
        }(window.jQuery)
    </script> 
</body>
</html>