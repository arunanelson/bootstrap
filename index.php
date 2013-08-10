<!DOCTYPE html>
<html lang="en">
<?php require_once("inc/header.php");?>
<body>
<div class="container outercontainer shadow">
  <?php require_once("inc/nav.php");?>
    <div class="clearfix"></div>
  </div>
  <div class="container-fluid">
    <div class="row">
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
        <?php require_once("inc/favourites.php"); ?>
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
</body>
</html>