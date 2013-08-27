<div class="prod_description"><span class="lightbox_header"><?php echo $product->name; ?></span>
  <div class="m5t">
    <button type="button" class="btn btn-default btn-xs" style="font-size:10px">View Specifications &raquo;</button>
  </div>
  <div class="prod_details">
    <ul class="prod_highlights summary">
      <?php $details = explode("•", $product_line->details); ?>
      <?php foreach(array_slice($details, 1) as $detail): ?>
      <li><?php echo (trim($detail)); ?></li>
      <?php endforeach; ?>
    </ul>
    <ul class="prod_highlights specs">
      <?php $specs = reset($product->getSpecs()); ?>
      <?php if($specs->cc_oz != NULL && $specs->cc_oz !='na'): ?>
      <li> <?php echo $specs->cc_oz; ?> oz - <?php echo $specs->cc_cl; ?> cl</li>
      <?php endif; ?>
      <li> H <?php echo $specs->h_inches; ?> - <?php echo $specs->h_mm; ?> mm</li>
      <li> Ø <?php echo $specs->theta_i; ?> - <?php echo $specs->theta_mm; ?> mm</li>
      <li> Item code: <span class="item_code"><?php echo $specs->item_code; ?></span></li>
      <li> Pack: <?php echo $specs->pack; ?> </li>
    </ul>
    <?php if($product->has_colours == 1): ?>
    <?php $colours = $product->getColours(); ?>
    <p class="prod_colours">COLOURS</p>
    <?php foreach($colours as $colour): ?>
    <div class="prod_colour_option <?php echo "item_".$colour->name; ?>" data-item-img="<?php echo $product->pic; ?>" data-item-id="<?php echo $colour->name; ?>" for="<?php echo $product->name; ?>" data-item-code="<?php echo $colour->code; ?>" data-orig-code="<?php echo $specs->item_code; ?>"></div>
    <?php endforeach; ?>
    <div class="clearfix"></div>
    <?php endif; ?>
  </div>
</div>
<div class="prod_logos">
  <?php if($specs->logos != NULL && $specs->logos !=''): ?>
  <?php $logos = explode(",", $specs->logos); ?>
  <?php foreach($logos as $logo): ?>
  <img src="<?php echo BASE_URL."img/logos/".(trim($logo)).".png"; ?>" />
  <?php endforeach; ?>
  <?php endif; ?>
</div>
<?php if($product->alt_pic != NULL): ?>
<a href="<?php echo BASE_URL; ?>img/catalog/<?php echo $product->pic; ?>_big.png" rel="prettyPhoto[<?php echo $product->name ?>]"><img src="<?php echo BASE_URL; ?>img/catalog/<?php echo $product->pic; ?>.png"/></a> <a href="<?php echo BASE_URL; ?>img/catalog/<?php echo $product->alt_pic; ?>_big.png" rel="prettyPhoto[<?php echo $product->name ?>]"><img style="display:none" src="<?php echo BASE_URL; ?>img/catalog/<?php echo $product->alt_pic; ?>.png"/></a>
<?php else: ?>
<a href="<?php echo BASE_URL; ?>img/catalog/<?php echo $product->pic; ?>_big.png" rel="prettyPhoto"><img src="<?php echo BASE_URL; ?>img/catalog/<?php echo $product->pic; ?>.png"/></a>
<?php endif; ?>
<div><span class="fav-product-heading" product="<?php echo $product->pic; ?>"><?php echo $product->name; ?></span><br />
  <span class="fav-product-detail"><?php echo (($specs->cc_oz != NULL && $specs->cc_oz !='na') ? $specs->cc_oz. ' oz' : 'Ø '.$specs->theta_i); ?>
  <?php if($product->has_colours == 1){
				  $coloursCount = count($colours);
				  echo '• '.$coloursCount.'COLORS';
				  } ?>
  </span></div>
