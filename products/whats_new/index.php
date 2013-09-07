<?php require_once("../../inc/domainModel.php");?>
<?php
 $pageTitle = "What&lsquo;s New?";
 	
 $rows = R::$f->begin()->select('*')->from('products')
  ->where(' is_new = ? ')
  ->put(1)->get();
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
        <div class="span3" id="pageTitle" title=""><?php echo $pageTitle; ?></div>
        <div id="productsWrapper">
          <?php foreach($products as $product): ?>
          <?php $product_line = reset($product->getLine())?>
          <div class="fleft product <?php echo $product_line->colour; ?>">
            <?php include "../../inc/product.php"; ?>
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