<?php require_once("inc/domainModel.php");?>
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
        <div class="slider-wrapper theme-default">
          <div id="slider" class="nivoSlider"> 
              <img src="img/slides/slide-01.jpg" alt="" usemap="#01map"> 
              <img src="img/slides/slide-03.jpg" alt="" usemap="#03map"> 
              <img src="img/slides/slide-04.jpg" alt="" usemap="#04map"> 
          </div>
          <div id="htmlcaption" class="nivo-html-caption"> <strong>This</strong> is an example of a <em>HTML</em> caption with <a href="#">a link</a>. </div>
        </div>
        <map name="01map">
          <area shape="circle" coords="140,140,100" href="who_we_are/about.php" alt="Find Out More" title="Find out more">
        </map>
        <map name="03map">
          <area shape="rect" coords="400,100,500,300" href="where_to_buy/stores/stores.php" alt="Where to buy" title="Where to buy">
        </map>
        <map name="04map">
          <area shape="rect" coords="400,100,500,300" href="who_we_are/about.php#ourhistory" alt="Read our story" title="Read our story">
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