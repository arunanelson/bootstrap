<div class="prod_description"><span class="lightbox_header"><?php echo $product->name; ?></span>
  <div class="m5t">
    <button type="button" class="btn btn-default btn-xs" style="font-size:10px">View Specifications &raquo;</button>
  </div>
  <div class="prod_details">
    <ul class="prod_highlights summary">
      <?php $details = explode("•", $product_line->details); ?>
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
<a href="<?php echo BASE_URL; ?>img/catalog/<?php echo $product->pic; ?>_big.png" rel="prettyPhoto"><img src="<?php echo BASE_URL; ?>img/catalog/<?php echo $product->pic; ?>.png"/></a>
<div><span class="fav-product-heading" product="<?php echo $product->name; ?>"><?php echo $product->name; ?></span><br />
  <span class="fav-product-detail"><?php echo $specs->cc_oz; ?> oz
  <?php if($product->has_colours == 1){
				  $coloursCount = count($colours);
				  echo '• '.$coloursCount.'COLORS';
				  } ?>
  </span></div>
