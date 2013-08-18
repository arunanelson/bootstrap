<?php require_once("../../inc/domainModel.php");?>
<?php
 $id = $_GET['id'];
 
 $prod_line = R::load('product_lines', $id);
 $prod_group = R::load('product_groups', $prod_line->prod_group_id);
 $prod_cat = R::load('categories', $prod_line->prod_cat_id);
 $pageTitle = $prod_group->name. ' | '.$prod_cat->name.' | '.$prod_line->name;
 	
 $rows = R::$f->begin()->select('*')->from('products')
  ->where(' line_id = ? ')
  ->put($id)->get();
 $products = R::convertToBeans('products',$rows); 
?>
<!DOCTYPE html>
<html lang="en">
<?php require_once("../../inc/header.php");?>
<body>
<div class="container outercontainer shadow">
  <?php require_once("../../inc/nav.php");?>
    <div class="clearfix"></div>
  </div>
  <div class="container-fluid">
    <div class="row-fluid">
      <div class="span12">
        <div class="span3" id="pageTitle" title="<?php echo $prod_line->name; ?>"><?php echo $pageTitle; ?></div>
        <div id="productsWrapper">
          <?php foreach($products as $product): ?>
          <div class="fleft product <?php echo $prod_line->colour; ?>"> <a href="../../img/catalog/<?php echo $product->pic; ?>_big.png" rel="prettyPhoto">
            <div class="prod_description"><span class="lightbox_header"><?php echo $product->name; ?></span>
              <div class="m5t">
                <button type="button" class="btn btn-default btn-xs" id="specs" style="font-size:10px">View Specifications &raquo;</button>
              </div>
              <div class="prod_details">
                <ul class="prod_highlights summary">
                  <?php $details = explode("•", $prod_line->details); ?>
                  <?php foreach(array_slice($details, 1) as $detail): ?>
                  <li><?php echo $detail; ?></li>
                  <?php endforeach; ?>
                </ul>
                <ul class="prod_highlights specs">
                  <?php $specs = reset($product->getSpecs()); ?>
                  <li> <?php echo $specs->cc_oz; ?> oz - <?php echo $specs->cc_cl; ?> cl</li>
                  <li> H <?php echo $specs->h_inches; ?> - <?php echo $specs->h_mm; ?> mm</li>
                  <li> Ø <?php echo $specs->theta_i; ?> - <?php echo $specs->theta_mm; ?> mm</li>
                  <li> Item code <?php echo $specs->item_code; ?></li>
                  <li> Pack: <?php echo $specs->pack; ?> </li>
                </ul>
                <?php if($product->has_colours == 1): ?>
                <?php $colours = $product->getColours(); ?>
                <p class="prod_colours">COLOURS</p>
                <?php foreach($colours as $colour): ?>
                <div class="prod_colour_option" id="<?php echo $colour->name; ?>" for="<?php echo $product->name; ?>"></div>
                <?php endforeach; ?>
                <div class="clearfix"></div>
                <?php endif; ?>
              </div>
            </div>
            <img src="../../img/catalog/<?php echo $product->pic; ?>.png"/></a>
            <div><span class="fav-product-heading" product="<?php echo $product->name; ?>"><?php echo $product->name; ?></span><br />
              <span class="fav-product-detail"><?php echo $specs->cc_oz; ?> oz
              <?php if($product->has_colours == 1){
				  $coloursCount = count($colours);
				  echo '• '.$coloursCount.'COLORS';
				  } ?>
              </span></div>
          </div>
          <?php endforeach; ?>
          <div class="clearfix"></div>
        </div>
        <!--/row--> 
      </div>
      <!--/span--> 
    </div>
    <!--/row--> 
    
  </div>
  <?php require_once("../../inc/footer.php"); ?>
  <!--/.fluid-container--> 
</div>
<?php require_once("../../inc/js.php"); ?>
<!-- To avoid delays, initialize Cufón before other scripts at the bottom --> 
<script type="text/javascript" charset="utf-8">
var i = 0;
			$(document).ready(function(){
			  $('body').on('click', '#specs', function(){
					
					if(i == 0)
					{
						$(".summary").hide('slow');
						$(".specs").show('slow');
						$(this).text("View Details >>");
						i = 1;
					}
					else
					{
						$(".specs").hide('slow');
						$(".summary").show('slow');
						$(this).text("View Specifications >>");
						i = 0;
					}
			    });
				
				$("a[rel^='prettyPhoto']").prettyPhoto();
				
				$(".fav-product-heading").click(function(){
					$.prettyPhoto.open('<?php echo BASE_URL; ?>img/catalog/' + $(this).attr("product") + '_big.png','',$(this).parent().parent().find("div[class=prod_description]").html());
				});
				
				$('body').on('mouseover', '.prod_colour_option', function(){
					$("#fullResImage").attr('src', '<?php echo BASE_URL; ?>img/catalog/' + $(this).attr("for") + '_' + $(this).attr("id").toLowerCase() + '_big.png');
			    });

			});
	</script>
</body>
</html>