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
          <area shape="circle" coords="140,140,100" href="products/whats_new/" alt="Find Out More" title="Find out more">
        </map>
        <map name="03map">
          <area shape="rect" coords="400,100,500,300" href="where_to_buy/stores/" alt="Where to buy" title="Where to buy">
        </map>
        <map name="04map">
          <area shape="rect" coords="400,100,500,300" href="who_we_are/#ourhistory" alt="Read our story" title="Read our story">
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
<script type="text/javascript">
	function loadImgMaps()
	{
		 $('img').each(function(){
				if($(this).attr('src') == 'img/slides/slide-01.jpg')
				 $(this).attr('usemap', '#01map');
				if($(this).attr('src') == 'img/slides/slide-03.jpg')
				 $(this).attr('usemap', '#03map');
				if($(this).attr('src') == 'img/slides/slide-04.jpg')
				 $(this).attr('usemap', '#04map');
			});
	}
    $(window).load(function() {
	  $('#slider').nivoSlider({
        afterChange: function(){loadImgMaps()}, // Triggers after a slide transition
    	});
	 loadImgMaps();
	});
</script>
</body>
</html>