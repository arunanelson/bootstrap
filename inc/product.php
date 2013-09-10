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
      <?php if($specs->cc_oz != NULL && $specs->cc_oz !='na'&& $specs->cc_oz !='n.a.'): ?>
      <li> <?php echo $specs->cc_oz; ?> oz - <?php echo $specs->cc_cl; ?> cl</li>
      <?php endif; ?>
      <?php if($specs->h_inches != NULL && $specs->h_inches !='na'&& $specs->h_inches !='n.a.'): ?>
      <li> H <?php echo $specs->h_inches; ?> - <?php echo $specs->h_mm; ?> mm</li>
      <?php endif; ?>
      <?php if($specs->theta_i != NULL && $specs->theta_i !='na'&& $specs->theta_i !='n.a.'): ?>
      <li> Ø <?php echo $specs->theta_i; ?> - <?php echo $specs->theta_mm; ?> mm</li>
      <?php endif; ?>
      <li> Item code: <span class="item_code"><?php echo $specs->item_code; ?></span></li>
      <li> Pack: <?php echo $specs->pack; ?> </li>
    </ul>
    <?php if($product->colours != NULL && empty($product->description)): ?>
    <?php $colours = strpos($product->colours, ',') !== false  ? explode(",",$product->colours) : array($product->colours); ?>
    <?php $coloursCount = count($colours); ?>
    <p class="prod_colours">COLORS</p>
    <?php foreach($colours as $colour): ?>
    <div class="prod_colour_option <?php echo "item_".$colour; ?>" data-item-img="<?php echo $product->pic; ?>" data-item-id="<?php echo $colour; ?>" for="<?php echo (str_replace(" ", "-", strtolower($product->name))); ?>"></div>
    <?php endforeach; ?>
    <div class="clearfix"></div>
    <?php endif; ?>
  </div>
</div>
<div class="prod_logos">
  <?php if($specs->logos != NULL && $specs->logos !=''): ?>
  <?php $logos = explode(",", $specs->logos); ?>
  <?php foreach($logos as $logo): ?>
  <?php //Convert whitespaces and underscore to dash
    $logoImg = preg_replace("/[\s_]/", "-", (trim(strtolower($logo))));
   ?>
  <img src="<?php echo BASE_URL."img/logos/".$logoImg.".png"; ?>" title="<?php echo trim($logo); ?>" />
  <?php endforeach; ?>
  <?php endif; ?>
</div>
<?php if($product->alt_pic != NULL): ?>
<a data-name="<?php echo $product->name ?>" data-set = "true" href="<?php echo BASE_URL; ?>img/catalog/<?php echo strtolower($product->pic); ?>_big.png" rel="prettyPhoto[<?php echo $product->name ?>]"><img src="<?php echo BASE_URL; ?>img/catalog/<?php echo strtolower($product->pic); ?>.png"/></a> 
<a href="<?php echo BASE_URL; ?>img/catalog/<?php echo strtolower($product->alt_pic); ?>_big.png" rel="prettyPhoto[<?php echo $product->name ?>]"><img style="display:none" src="<?php echo BASE_URL; ?>img/catalog/<?php echo strtolower($product->alt_pic); ?>.png"/></a>
<?php else: ?>
<a data-name="<?php echo $product->name ?>" data-set = "false" href="<?php echo BASE_URL; ?>img/catalog/<?php echo strtolower($product->pic); ?>_big.png" rel="prettyPhoto[<?php echo $product->name ?>]"><img src="<?php echo BASE_URL; ?>img/catalog/<?php echo strtolower($product->pic); ?>.png"/></a>
<?php endif; ?>
<div><span class="fav-product-heading" product="<?php echo strtolower($product->pic); ?>"><?php echo ucwords(strtolower($product->name)); ?></span><br />
  <span class="fav-product-detail"><?php if(!empty($product->description)){echo strtoupper($product->description);} else{ echo (($specs->cc_oz != NULL && $specs->cc_oz !='na') ? $specs->cc_oz. ' oz' : 'Ø '.$specs->theta_i);} ?>
  <?php if($product->colours != NULL && empty($product->description)){
				  echo '• '.$coloursCount.' COLORS';
				  } 
					   ?>
  </span></div>
