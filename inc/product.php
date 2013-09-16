<div class="prod_description"><span class="lightbox_header"><?php echo $product->name; ?></span>
  <div class="m5t">
    <button type="button" class="btn btn-default btn-xs" style="font-size:10px">View Specifications &raquo;</button>
  </div>
  <div class="prod_details">
    <ul class="prod_highlights summary">
      <?php if(isset($_GET['cat']) && $_GET['cat'] ==10 ): ?>
      <li class="special_line">All our shot glasses have:</li>
      <?php endif; ?>
      <?php if($product->features == NULL): ?>
      <?php $details = explode("•", $product_line->details); ?>
      <?php else: ?>
      <?php $details = explode("•", $product->features); ?>
      <?php endif; ?>
      <?php foreach(array_slice($details, 1) as $detail): ?>
      <?php if (strpos((strtolower($detail)), 'recommended wines') !== false 
	  || strpos((strtolower($detail)), 'recommended liqueurs') !== false
	  || strpos((strtolower($detail)), 'recommended beers') !== false): ?>
      <li class="recommended"><?php echo (trim($detail)); ?></li>
      <?php else: ?>
      <li><?php echo (trim($detail)); ?></li>
      <?php endif; ?>
      <?php endforeach; ?>
    </ul>
    <ul class="prod_highlights specs">
      <?php $specs = reset($product->getSpecs()); ?>
      <?php if($specs->cc_oz != NULL && $specs->cc_oz !='na'&& $specs->cc_oz !='n.a.'): ?>
      <li> <?php echo $specs->cc_oz; ?>
        <?php if(strpos(strtolower($specs->cc_oz), 'oz') === false && strpos(strtolower($specs->cc_oz), '"') === false && strpos(strtolower($specs->cc_oz), 'cs') === false): ?>
        oz - <?php echo $specs->cc_cl; ?> cl
        <?php endif; ?>
      </li>
      <?php endif; ?>
      <?php if($specs->h_inches != NULL && $specs->h_inches !='na'&& $specs->h_inches !='n.a.'): ?>
      <li> H <?php echo $specs->h_inches; ?> - <?php echo $specs->h_mm; ?> mm</li>
      <?php endif; ?>
      <?php if($specs->theta_i != NULL && $specs->theta_i !='na'&& $specs->theta_i !='n.a.'): ?>
      <li> Ø <?php echo $specs->theta_i; ?> - <?php echo $specs->theta_mm; ?> mm</li>
      <?php endif; ?>
      <li> Item code: <span class="item_code"><?php echo $specs->item_code; ?></span></li>
      <?php if($specs->cod_dec != NULL): ?>
      <li> Decoration code: <?php echo $specs->cod_dec; ?></li>
      <?php endif; ?>
      <?php if($specs->pack != NULL): ?>
      <?php //Convert whitespaces and underscore to dash
        $pack = preg_replace("/[!]/", "", (trim(strtolower($specs->pack))));
   	  ?>
      <li> Pack: <?php echo $pack; ?> </li>
      <?php endif; ?>
      <?php if($specs->pack2 != NULL): ?>
      <?php //Convert whitespaces and underscore to dash
        $pack = preg_replace("/[!]/", "", (trim(strtolower($specs->pack2))));
   	  ?>
      <li> Pack 2: <?php echo $pack; ?> </li>
      <?php endif; ?>
      <?php if($specs->pack3 != NULL): ?>
      <?php //Convert whitespaces and underscore to dash
        $pack = preg_replace("/[!]/", "", (trim(strtolower($specs->pack3))));
   	  ?>
      <li> Pack 3: <?php echo $pack; ?> </li>
      <?php endif; ?>
      <?php if($specs->is_set == 1): ?>
      <?php if($specs->piece1 != NULL): ?>
      <li> Piece 1: <?php echo $specs->piece1; ?> </li>
      <?php endif; ?>
      <?php if($specs->piece2 != NULL): ?>
      <li> Piece 2: <?php echo $specs->piece2; ?> </li>
      <?php endif; ?>
      <?php if($specs->piece3 != NULL): ?>
      <li> Piece 3: <?php echo $specs->piece3; ?> </li>
      <?php endif; ?>
      <?php if($specs->piece4 != NULL): ?>
      <li> Piece 4: <?php echo $specs->piece4; ?> </li>
      <?php endif; ?>
      <?php endif; ?>
    </ul>
    <?php if($product->colours != NULL): ?>
    <?php if (strpos($_SERVER['PHP_SELF'], "whats_new") !== false): ?>
    <?php $colours = explode(",",$product_line->newcolors); ?>
    <?php else: ?>
    <?php $colours = strpos($product->colours, ',') !== false  ? explode(",",$product->colours) : array($product->colours); ?>
    <?php endif; ?>
    <?php $coloursCount = count($colours); ?>
    <p class="prod_colours">COLORS</p>
    <?php foreach($colours as $colour): ?>
    <?php $imgPath = strtolower(substr($product->pic, 0, strripos($product->pic, "_"))); ?>
    <div rel="tooltip2" class="prod_colour_option <?php echo "item_".$colour; ?>" title="<?php echo $colour; ?>" data-item-img="<?php echo $product->pic; ?>" data-item-id="<?php echo $colour; ?>" data-color="<?php echo $imgPath."_".$colour."_big.png"; ?>"></div>
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
  <img rel="tooltip" src="<?php echo BASE_URL."img/logos/".$logoImg.".png"; ?>" title="<?php echo trim($logo); ?>" />
  <?php endforeach; ?>
  <?php endif; ?>
</div>
<?php if($product->alt_pic != NULL): ?>
<a data-name="<?php echo $product->name ?>" data-set = "true" href="<?php echo BASE_URL; ?>img/catalog/<?php echo strtolower($product->pic); ?>_big.png" rel="prettyPhoto[<?php echo $product->name ?>]"><img src="<?php echo BASE_URL; ?>img/catalog/<?php echo strtolower($product->pic); ?>.png"/></a> <a href="<?php echo BASE_URL; ?>img/catalog/<?php echo strtolower($product->alt_pic); ?>_big.png" rel="prettyPhoto[<?php echo $product->name ?>]"><img style="display:none" src="<?php echo BASE_URL; ?>img/catalog/<?php echo strtolower($product->alt_pic); ?>.png"/></a>
<?php else: ?>
<a data-name="<?php echo $product->name ?>" data-set = "false" href="<?php echo BASE_URL; ?>img/catalog/<?php echo strtolower($product->pic); ?>_big.png" rel="prettyPhoto[<?php echo (($product->group_name == NULL) ? $product->name : $product->group_name) ?>]"><img src="<?php echo BASE_URL; ?>img/catalog/<?php echo strtolower($product->pic); ?>.png"/></a>
<?php endif; ?>
<?php
 if (isset($_GET['group']))
 {
	 $prodName = strtolower($product_line->name);
	 $prodDesc = $product_line->description;
 }
 else
 {
	 $prodName = $product->name;
	 preg_match ("!\d+!", $product->name, $matches, PREG_OFFSET_CAPTURE);
	 if(count($matches) !== 0)
	 {
		 $prodSize = substr($product->name, $matches[0][1], (strlen($product->name) - $matches[0][1]));
		 $prodName = substr($product->name, 0, $matches[0][1]);
	 }
	 $prodDesc = $product->description;
 }
 ?>
<div><span class="fav-product-heading" product="<?php echo strtolower($product->pic); ?>"><?php echo ucwords(($prodName)); ?></span><br />
  <span class="fav-product-detail">
  <?php if(!empty($prodDesc)){echo strtoupper($prodDesc);}?>
  <?php if(!empty($prodSize)){echo strtoupper($prodSize);}?>
  <?php if($product->colours != NULL){
	  $coloursCount = count($colours);
		  if((!empty($prodDesc)) && (strpos(strtolower($prodDesc), "color") === false)){
					  echo '• '.$coloursCount.' COLORS';
		  }
		  if((!empty($prodDesc)) && (strpos(strtolower($prodDesc), "color") !== false)){
			  //do nothing
		  }
		  if (empty($prodDesc))
		  {
			   echo $coloursCount.' COLORS';
		  }
		} 
   ?>
  </span></div>
