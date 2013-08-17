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
    <div class="row-fluid">
      <div class="span12">
        <div class="span3" id="whatsNew" title="What&rsquo;s new?">WHAT&rsquo;S NEW?</div>
        <div id="productsWrapper">
          <div class="fleft product turquoise"> <a href="img/catalog/giove_big.png" rel="prettyPhoto">
            <div class="prod_description"><span class="lightbox_header">Giove Cooler</span>
              <div class="prod_details">
                <p class="uom">16.75oz (49.7cl) </p>
                <ul class="prod_highlights">
                  <li> Dishwasher safe</li>
                  <li> Sprayed glass</li>
                </ul>
                <p class="prod_strapline">Great for summer cocktails!</p>
                <p class="prod_colours">COLOURS</p>
                <div class="prod_colour_option" id="prodRed" for="giove"></div>
                <div class="prod_colour_option" id="prodOrange" for="giove"></div>
                <div class="prod_colour_option" id="prodBlue" for="giove"></div>
                <div class="prod_colour_option" id="prodGreen" for="giove"></div>
                <div class="prod_colour_option" id="prodPurple" for="giove"></div>
                <div class="prod_colour_option" id="prodPink" for="giove"></div>
                <div class="clearfix"></div>
              </div>
            </div>
            <img src="img/catalog/giove.png"/></a>
            <div><span class="fav-product-heading" product="giove">Giove Cooler</span><br />
              <span class="fav-product-detail">16.75oz • 6 COLORS</span></div>
          </div>
          <div class="fleft product turquoise"> <a href="img/catalog/giove_dof_big.png" rel="prettyPhoto">
            <div class="prod_description"><span class="lightbox_header">Giove D.O.F.</span>
              <div class="prod_details">
                <p class="uom">10.5oz (49.7cl) </p>
                <ul class="prod_highlights">
                  <li> Dishwasher safe</li>
                  <li> Sprayed glass</li>
                </ul>
                <p class="prod_strapline">Great for summer cocktails!</p>
                <p class="prod_colours">COLOURS</p>
<!--                <div class="prod_colour_option" id="prodRed"></div>
                <div class="prod_colour_option" id="prodOrange"></div>
                <div class="prod_colour_option" id="prodBlue"></div>
                <div class="prod_colour_option" id="prodGreen"></div>
                <div class="prod_colour_option" id="prodPurple"></div>
                <div class="prod_colour_option" id="prodPink"></div>-->
                <div class="clearfix"></div>
              </div>
            </div>
            <img src="img/catalog/giove_dof.png"/></a>
            <div><span class="fav-product-heading" product="giov_dof">Giove D.O.F.</span><br />
              <span class="fav-product-detail">6 COLORS</span></div>
          </div>
          <div class="clearfix"></div>
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
<!-- To avoid delays, initialize Cufón before other scripts at the bottom --> 
<script type="text/javascript" charset="utf-8">
			$(document).ready(function(){
				$("a[rel^='prettyPhoto']").prettyPhoto();
				
				$(".fav-product-heading").click(function(){
					$.prettyPhoto.open('img/catalog/' + $(this).attr("product") + '_big.png','',$(this).parent().parent().find("div[class=prod_description]").html());
				});
				
				$('body').on('mouseover', '.prod_colour_option', function(){
					$("#fullResImage").attr('src', 'img/catalog/' + $(this).attr("for") + '_' + $(this).attr("id") + '.png');
			    });
			});
	</script>
</body>
</html>