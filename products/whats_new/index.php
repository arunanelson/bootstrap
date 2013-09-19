<?php require_once("../../inc/domainModel.php");?>
<?php
ob_start(); 
 $pageTitle = "What&lsquo;s New?";
 	
 $rows = R::$f->begin()->select('*')->from('product_lines')
  ->where(' is_new = ?  order by `order`')
  ->put(1)->get();
 $product_lines = R::convertToBeans('product_lines',$rows); 
       if(count($product_lines) == 1 ){
			 flush(); // Flush the buffer
             ob_flush(); 
			 header("Location: ".BASE_URL."products/line/?id=".reset($product_lines)->id); 
			 die;			 
	  }
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
        <div class="span3" id="pageTitle" title=""><?php echo $pageTitle; ?></div>
        <div id="productsWrapper">
          <?php foreach($product_lines as $product_line): ?>
          <?php $products = $product_line->getProducts(); $product = reset($products); ?>
          <div class="fleft product <?php echo $product_line->colour; ?>">
            <?php if(count($products) == 1 ): ?>
            <?php include "../../inc/product.php"; ?>
            <?php else: ?>
            <a href="<?php echo BASE_URL.'products/line/?id='.$product_line->id."&new=1"; ?>"> <img style="max-height:135px" title="<?php echo ucwords(strtolower($product_line->name)); ?>" src="../../img/catalog/<?php echo strtolower(reset($products)->pic); ?>.png"/> </a>
            <div style="margin-top:15px">
            <span class="fav-product-heading" title="<?php echo ucwords(strtolower($product_line->name)); ?>">
			<?php echo ucwords(strtolower($product_line->name)); ?>
            </span><br>
             <span class="fav-product-detail">
              <?php if(!empty($product_line->new_desc)){echo strtoupper($product_line->new_desc);}?>
              </span>
            </div>
            <?php endif; ?>
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
<script type="text/javascript" charset="utf-8">
var i = 0;
</script>
</body>
</html>