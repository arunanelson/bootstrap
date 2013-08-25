<?php require_once("../inc/domainModel.php");?>
<!DOCTYPE html>
<html lang="en">
<?php
 $group = $_GET['group'];
 $cat = 0;
 
 $prod_group = R::load('product_groups', $group);
 $pageTitle = $prod_group->name;

 if(isset($_GET['cat']))
 {
	$cat = $_GET['cat'];
	$prod_cat = R::load('categories', $cat);
	$pageTitle = $prod_group->name.' | '.$prod_cat->name;
 }
 	
 $rows = R::$f->begin()->select('*')->from('product_lines')
  ->where(' prod_group_id = ? ')
  ->and(' prod_cat_id = ? ')
  ->put($group)->put($cat)->get();
 $product_lines = R::convertToBeans('product_lines',$rows); 

 $index = 0;
?>
<?php require_once("../inc/header.php");?>
<body>
<div class="container outercontainer shadow">
  <?php require_once("../inc/nav.php");?>
    <div class="clearfix"></div>
  </div>
  <div class="container-fluid">
    <div class="row-fluid">
      <div class="span12">
        <div class="span3" id="pageTitle" title="<?php echo $prod_group->name; ?>"><?php echo $pageTitle; ?></div>
        <div id="productsWrapper">
          <?php foreach($product_lines as $product_line): ?>
          <div class="fleft product <?php echo $product_line->colour; ?>">
            <?php $products = $product_line->getProducts(); $product = reset($products); ?>
            <?php if(count($products) == 1 ): ?>
             <?php include "../inc/product.php"; ?>
            <?php else: ?>
            <a href="<?php echo BASE_URL.'products/line/?id='.$product_line->id; ?>"> <img title="<?php echo $product_line->name; ?>" src="../img/catalog/<?php echo reset($products)->pic; ?>.png"/> </a>
            <div><span class="fav-product-heading" title="<?php echo $product_line->name; ?>"><?php echo $product_line->name; ?></span></div>
            <?php endif; ?>
          </div>
          <?php $index++; ?>
          <?php if($index %4 == 0): ?>
          <div class="clearfix"> </div>
          <?php endif; ?>
          <?php endforeach; ?>
          <div class="clearfix"></div>
        </div>
        <!--/row--> 
      </div>
      <!--/span--> 
    </div>
    <!--/row--> 
  </div>
  <?php require_once("../inc/footer.php"); ?>
  <!--/.fluid-container--> 
</div>
<?php require_once("../inc/js.php"); ?>
<script type="text/javascript" charset="utf-8">
var i = 0;
</script>
</body>
</html>