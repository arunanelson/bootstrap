<?php
 $rows = R::$f->begin()->select('*')->from('product_groups')->get();
 $product_groups = R::convertToBeans('product_groups',$rows);
?>

<div class="masthead">
<div class="logo">
  <div class="logo-br"></div>
  <div class="logo-italy"></div>
</div>
<div class="navi">
  <div class="navbar">
    <div class="container" id="topNav">
      <ul class="nav">
        <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Who we are <b class="caret"></b></a>
          <ul class="dropdown-menu transparent">
            <li><a class="scrollItem" href="#ourhistory">The History of Bormioli Rocco</a></li>
            <li><a class="scrollItem" href="#glasshistory">The History of Glass</a></li>
            <li><a class="scrollItem" href="#italianglass">The History of Italian Glass</a></li>
            <li><a class="scrollItem" href="#northamerica">Bormioli Rocco North America</a></li>
            <li><a class="scrollItem" href="#partners">Our Partners</a></li>
            <li><a class="scrollItem" href="#facts">Facts &amp; Figures</a></li>
          </ul>
        </li>
        <li><a href="<?php echo BASE_URL; ?>products">What's new</a></li>
        <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Where to buy<b class="caret"></b></a>
          <ul class="dropdown-menu transparent">
            <li class="nav-header">Retail</li>
            <li class="subItem"><a href="<?php echo BASE_URL; ?>where_to_buy/sales_network">Sales Network</a></li>
            <li class="subItem"><a href="<?php echo BASE_URL; ?>where_to_buy/stores">In the Stores</a></li>
            <li class="divider"></li>
            <li><a href="#">Restaurants &amp; Hospitality</a></li>
            <li><a href="#">Canada</a></li>
          </ul>
        </li>
        <li><a href="<?php echo BASE_URL; ?>contact">Contact</a></li>
      </ul>
      <div id="faceBook"></div>
      <div id="twitter"></div>
      <div id="searchFrm">
        <form class="navbar-form pull-right">
          <input class="span2" type="text" placeholder="Search">
        </form>
      </div>
    </div>
    <div class="clearfix"></div>
    <div class="container" id="bottomNav">
      <ul class="nav">
        <?php foreach($product_groups as $product_group): ?>
        <?php $categories = $product_group->getCategories(); ?>
        <?php if($categories == NULL ): ?>
        <li> <a href="<?php echo BASE_URL.'products/?group='.$product_group->id; ?>" data-id="<?php echo $product_group->id; ?>"><?php echo $product_group->name; ?></a></li>
        <?php else: ?>
        <li class="dropdown"> <a href="<?php echo BASE_URL.'products/?group='.$product_group->id; ?>" class="dropdown-toggle" data-id="<?php echo $product_group->id; ?>" data-toggle="dropdown"><?php echo $product_group->name; ?><b class="caret"></b></a>
          <ul class="dropdown-menu transparent">
            <?php foreach($categories as $category): ?>
            <li><a href="<?php echo BASE_URL.'products/line/?group='.$product_group->id.'&cat='.$category->id; ?>" data-id="<?php echo $category->id; ?>"><?php echo $category->name; ?></a></li>
            <?php endforeach; ?>
          </ul>
        </li>
        <?php endif ?>
        <?php endforeach; ?>
      </ul>
    </div>
  </div>
</div>
