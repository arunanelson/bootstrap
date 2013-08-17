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
        <div id="myCarousel" class="carousel slide boxshadow">
          <div class="carousel-inner">
            <div class="item active"> <img src="img/slides/slide-05.jpg" alt=""> </div>
          </div>
        </div>
        <!-- /.carousel -->
        <div id="ourhistory" class="about_copy">
          <div class="article_title w310">The History of Bormioli Rocco</div>
          <div class="article_body w640 fleft"> Bormioli Rocco has built a powerhouse brand on the foundation laid down in Italy 
            over 1,300 years ago in Fidenza. With more than 2,500 employees working in 9 plants, 
            Bormioli Rocco uses the finest natural resources to create superior glass and 
            plastic products for homes and businesses around the world. From the finest sand 
            imported from Germany to organic glazes for the colors in the glass, all are 
            brought together in products influenced by exhaustive design research. 
            The results are beautiful and durable tableware, supremely safe pharmaceutical packaging, 
            elegant bottles for cosmetics and perfumes, and bottles and jars that hold some of 
            Italy’s most iconic and delectable brands. </div>
          <div class="about_right"> </div>
          <div class="clearfix"></div>
        </div>
        <div class="headline"> Bormioli Rocco uses the finest natural resources to create 
          superior glass and plastic products for homes and businesses around the world. </div>
        <div class="carousel slide boxshadow about_img">
          <div class="carousel-inner">
            <div class="item active"> <img src="img/slides/slide-06.jpg" alt=""> </div>
          </div>
        </div>
        <div class="about_copy" id="glasshistory">
          <div class="article_body w640 fleft">
            <p>With stemware, glasses, food storage and preserving jars, 
              and dinnerware gracing tables around the world, quality is the cornerstone in the foundation 
              that supports the Bormioli Rocco reputation. The plants where glass is produced, 
              located in Italy, France and Spain, are state of the art manufacturing facilities 
              that make use of the most up to date technology and economic sourcing of raw materials. 
              Efficiency and scale translate into value, so it is no surprise that in Italy, 
              Bormioli Rocco holds a 50% market share in the mass retail distribution channel for tableware. </p>
            <p>Market share cannot be maintained by resting on ones laurels. Every year, 
              the designers at Bormioli Rocco combine first hand trend research with the insights 
              garnered from the PeclersParis report, the industry standard for excellence in color 
              and design predictions, to stay ahead of the crowd with product innovations. 
              The report sets out a vision of future consumer values, attitudes, 
              lifestyles and aesthetic preferences as well as fashion, home design and color 
              trending. All are used as inspiration for color, shape and style forecasting, 
              the end result being new colors and shapes in the wine glasses, food containers 
              and tumblers that will end up on the tables and in the kitchens of modern homes everywhere.</p>
            <p>In the arena of cosmetic and perfume bottles, Bormioli Rocco supplies a true A-list of 
              clients with unique bottles and jars, all made exclusively in Italy. Armani, L’Oreal, 
              Bulgari and Clarins are just a few of the companies selling cosmetics and fragrances 
              in custom designed glass. Grocers, wine merchants and restaurants and bars around the 
              world have shelves stocked with food and drink in Bormioli Rocco bottles and jars. Nutella, 
              Barilla pasta sauce, Monini olive oil, Amaretto di Saronno and wine Cusumano, Antinori 
              and Ceretto are just a few of the recognizable brands. </p>
          </div>
        </div>
        <div class="clearfix"></div>
        <div class="carousel slide boxshadow about_img">
          <div class="carousel-inner">
            <div class="item active"> <img src="img/slides/slide-07.jpg" alt=""> </div>
          </div>
        </div>
        <div class="about_copy" id="northamerica">
          <div class="article_title w160">The USA Team</div>
          <div class="article_body w640 fleft">Ea commodo consequat duis autem vel eum 
            iriure dolor in hendrerit in vulputate? Dignissim qui blandit, praesent 
            luptatum zzril delenit augue duis dolore te feugait. Quam nunc putamus 
            parum claram anteposuerit litterarum formas humanitatis, per seacula quarta decima? 
            Lectores legere me lius quod, ii legunt saepius claritas? Exerci tation ullamcorper 
            suscipit lobortis nisl ut aliquip ex velit esse molestie? Demonstraverunt est 
            etiam processus dynamicus qui sequitur mutationem consuetudium lectorum mirum est 
            notare quam. Laoreet dolore magna aliquam erat volutpat ut wisi enim ad minim veniam quis nostrud! </div>
        </div>
        <div class="clearfix"></div>
        <div class="carousel slide boxshadow about_img">
          <div class="carousel-inner">
            <div class="item active"> <img src="img/slides/slide-08.jpg" alt=""> </div>
          </div>
        </div>
        <div class="about_copy" id="partners">
          <div class="article_body w640 fleft">
            <p>Ea commodo consequat duis autem vel eum 
              iriure dolor in hendrerit in vulputate? Dignissim qui blandit, praesent 
              luptatum zzril delenit augue duis dolore te feugait. Quam nunc putamus parum claram 
              anteposuerit litterarum formas humanitatis, per seacula quarta decima? 
              Lectores legere me lius quod, ii legunt saepius claritas? Exerci tation 
              ullamcorper suscipit lobortis nisl ut aliquip ex velit esse molestie? 
              Demonstraverunt est etiam processus dynamicus qui sequitur mutationem 
              consuetudium lectorum mirum est notare quam. Laoreet dolore magna aliquam erat 
              volutpat ut wisi enim ad minim veniam quis nostrud!</p>
            <p>&nbsp;</p>
          </div>
        </div>
        <div class="clearfix"></div>
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

$(function(){
	if(window.location.hash != null)
	{
		$(window.location.hash).ScrollTo({
						duration: 1000,
						easing: 'easeInQuad'
	   });		
	}
});

</script>
</body>
</html>