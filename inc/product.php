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
      <?php if($product->colours == NULL): ?>
      <li> Item code: <span class="item_code"><?php echo $specs->item_code; ?></span></li>
      <?php if($specs->cod_dec != NULL): ?>
      <li> Decoration code: <?php echo $specs->cod_dec; ?></li>
      <?php endif; ?>
      <?php endif; ?>
      <?php $pack = "" ?>
      <?php if($specs->pack != NULL && $specs->pack2 == NULL): ?>
      <?php //Convert whitespaces and underscore to dash
        $pack = preg_replace("/[!]/", "", (trim(strtolower($specs->pack))));
   	  ?>
      <li> Pack: <?php echo $pack; ?> </li>
      <?php elseif($specs->pack != NULL && $specs->pack2 != NULL && $specs->pack3 == NULL): ?>
      <?php //Convert whitespaces and underscore to dash
        $pack2 = "Pack: ".$specs->pack." - ". preg_replace("/[!]/", "", (trim(strtolower($specs->pack2))));
   	  ?>
      <li> <?php echo $pack2; ?> </li>
      <?php elseif($specs->pack != NULL && $specs->pack3 != NULL): ?>
      <?php //Convert whitespaces and underscore to dash
        $pack3 = "Pack: ".preg_replace("/[!]/", "", (trim(strtolower($specs->pack))))." - ". preg_replace("/[!]/", "", (trim(strtolower($specs->pack3))));
   	  ?>
      <li> <?php echo $pack3; ?> </li>
      <?php endif; ?>
      <?php if($specs->is_set == 1): ?>
      <?php if($specs->piece1 != NULL): ?>
      <?php $pieces =  $specs->piece1; ?>
      <?php endif; ?>
      <?php if($specs->piece2 != NULL): ?>
      <?php $pieces =  $specs->piece1.", ".$specs->piece2; ?>
      <?php endif; ?>
      <?php if($specs->piece3 != NULL): ?>
      <?php $pieces =  $specs->piece1.", ".$specs->piece2.", ".$specs->piece3; ?>
      <?php endif; ?>
      <?php if($specs->piece4 != NULL): ?>
      <?php $pieces =  $specs->piece1.", ".$specs->piece2.", ".$specs->piece3.", ".$specs->piece4; ?>
      <?php endif; ?>
      <li> Sizes: <?php echo $pieces; ?> </li>
      <?php endif; ?>
    </ul>
    <?php $newcolors = NULL; ?>
    <?php if($product->colours != NULL): ?>
    <?php $colours = $product->getColours(); ?>
    <?php $coloursCount = count($colours); ?>
     <?php if(($product_line->newcolors !== NULL) && ((strpos($_SERVER['PHP_SELF'], "whats_new") !== false) || isset($_GET['new']))): ?>
     <?php $newcolors = explode(",", $product_line->newcolors); ?>
     <?php endif; ?>
    <p class="prod_colours">COLORS</p>
    <?php foreach($colours as $colour): ?>
    <?php if($newcolors !== NULL && in_array($colour->name, $newcolors)): ?>
    <?php $imgPath = strtolower(substr($product->pic, 0, strripos($product->pic, "_"))); ?>
    <div rel="tooltip2" data-orig-itemcode="<?php echo "Item code: ".$specs->item_code; ?>" data-orig-coddec="<?php echo ($specs->cod_dec != NULL ? "Decoration code: ".$specs->cod_dec : ""); ?>" data-item-code="<?php echo "Item code: ".$colour->item_code; ?>" data-decoration-code="<?php echo $colour->cod_dec != NULL ? "Decoration code: ".$colour->cod_dec : ""; ?>" class="prod_colour_option <?php echo "item_".$colour->name; ?>" title="<?php echo $colour->name; ?>" data-item-img="<?php echo strtolower($product->pic); ?>" data-item-id="<?php echo $colour->name; ?>" data-color="<?php echo $imgPath."_".$colour->name."_big.png"; ?>"></div>
    <?php endif; ?>
   <?php if($newcolors === NULL): ?>
    <?php $imgPath = strtolower(substr($product->pic, 0, strripos($product->pic, "_"))); ?>
    <div rel="tooltip2" data-orig-itemcode="<?php echo "Item code: ".$specs->item_code; ?>" data-orig-coddec="<?php echo ($specs->cod_dec != NULL ? "Decoration code: ".$specs->cod_dec : ""); ?>" data-item-code="<?php echo "Item code: ".$colour->item_code; ?>" data-decoration-code="<?php echo $colour->cod_dec != NULL ? "Decoration code: ".$colour->cod_dec : ""; ?>" class="prod_colour_option <?php echo "item_".$colour->name; ?>" title="<?php echo $colour->name; ?>" data-item-img="<?php echo strtolower($product->pic); ?>" data-item-id="<?php echo $colour->name; ?>" data-color="<?php echo $imgPath."_".$colour->name."_big.png"; ?>"></div>
    <?php endif; ?>
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
<a data-name="<?php echo $product->name ?>" data-set = "true" href="<?php echo BASE_URL; ?>img/catalog/<?php echo strtolower($product->pic); ?>_big.png" rel="prettyPhoto[<?php echo $product->name ?>]"><img style="max-height:110px" src="<?php echo BASE_URL; ?>img/catalog/<?php echo strtolower($product->pic); ?>.png"/></a> <a href="<?php echo BASE_URL; ?>img/catalog/<?php echo strtolower($product->alt_pic); ?>_big.png" rel="prettyPhoto[<?php echo $product->name ?>]"><img style="display:none" src="<?php echo BASE_URL; ?>img/catalog/<?php echo strtolower($product->alt_pic); ?>.png"/></a>
<?php else: ?>
<a data-name="<?php echo $product->name ?>" data-set = "false" href="<?php echo BASE_URL; ?>img/catalog/<?php echo strtolower($product->pic); ?>_big.png" rel="prettyPhoto[<?php echo (($product->group_name == NULL) ? $product->name : $product->group_name) ?>]"><img style="max-height:110px" src="<?php echo BASE_URL; ?>img/catalog/<?php echo strtolower($product->pic); ?>.png"/></a>
<?php endif; ?>
<?php
$prodSize = "";
 if (isset($_GET['group']))
 {
	 $prodName = strtolower($product_line->name);
	 $prodDesc = $product_line->description;
 }
 else
 {
	 $prodName = $product->name;
	 preg_match ("!\d+!", $product->name, $matches, PREG_OFFSET_CAPTURE);
	 if(count($matches) !== 0 && (strpos(strtolower($product->name), "oz") !== false 
	 || strpos(strtolower($product->name), "x") !== false)
	 || strpos(strtolower($product->name), "\"") !== false
	 || strpos(strtolower($product->name), "12 tall") !== false)
	 {
		 $prodSize = substr($product->name, $matches[0][1], (strlen($product->name) - $matches[0][1]));
		 $prodName = substr($product->name, 0, $matches[0][1]);
	 }
	 $prodDesc = $product->description;
 }
 ?>
<div style="margin-top:15px"><span class="fav-product-heading" product="<?php echo strtolower($product->pic); ?>"><?php echo ucwords(($prodName)); ?></span><br />
  <span class="fav-product-detail">
  <?php if(!empty($prodDesc)){echo strtoupper($prodDesc);}?>
  <?php if(!empty($prodSize)){echo strtoupper($prodSize);}?>
  <?php if (strpos($_SERVER['PHP_SELF'], "whats_new") === false): ?>
  <?php if($product->colours != NULL){
	  $coloursCount = count($colours);
		  if((!empty($prodDesc) || (!empty($prodSize))) && (strpos(strtolower($prodDesc), "color") === false)){
					  echo '• '.$coloursCount.' COLORS';
		  }
		  if((!empty($prodDesc)) && (strpos(strtolower($prodDesc), "color") !== false)){
			  //do nothing
		  }
		  if (empty($prodDesc) && empty($prodSize))
		  {
			   echo $coloursCount.' COLORS';
		  }
		} 
   ?>
  <?php else: ?>
  <?php if(!empty($product_line->new_desc)){echo strtoupper($product_line->new_desc);}?>
  <?php endif; ?>
  </span></div>
