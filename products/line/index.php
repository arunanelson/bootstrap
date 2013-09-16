<?php require_once("../../inc/domainModel.php");?>
<?php
 $id = $_GET['id'];
 
 $product_line = R::load('product_lines', $id);
 $prod_group = R::load('product_groups', $product_line->prod_group_id);
 $prod_cat = R::load('categories', $product_line->prod_cat_id);
 $pageTitle = $prod_group->name. ' | '. ($prod_cat->id != 0  ? $prod_cat->name.' | ' : '').(ucwords(strtolower($product_line->name)));
 	
 $rows = R::$f->begin()->select('*')->from('products')
  ->where(' line_id = ? order by `id` ')
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
        <div class="span3" id="pageTitle" title="<?php echo $product_line->name; ?>"><?php echo $pageTitle; ?></div>
        <div id="productsWrapper">
          <?php foreach($products as $product): ?>
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