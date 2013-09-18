<?php require_once("../../inc/domainModel.php");?>
<!DOCTYPE html>
<html lang="en">
<?php $pageTitle = "Where to Buy | In Stores"; ?>
<?php require_once("../../inc/header.php");?>
<body>
<div class="container outercontainer shadow">
  <?php require_once("../../inc/nav.php");?>
    <div class="clearfix"></div>
  </div>
  <div class="container-fluid">
    <div class="row">
      <div class="span12">
        <div class="span3" id="pageTitle" title="Where to buy">WHERE TO BUY</div>
        <div id="salesWrapper">
          <div class="article_left w150 m20t" id="sales">IN THE STORES</div>
          <div class="article_container">
            <div class="stores">
              <ul>
                <li> <a href="http://www.bedbathandbeyond.com" target="_blank">Bed Bath &amp; Beyond</a></li>
                <li> <a href="http://www.containerstore.com/welcome.htm" target="_blank">Container Store</a></li>
                <li> <a href="http://www.crateandbarrel.com" target="_blank">Crate &amp; Barrel</a></li>
                <li> <a href="http://www.williams-sonoma.com" target="_blank">Williams Sonoma</a></li>
                <li> <a href="http://www.westelm.com" target="_blank">West Elm</a></li>
                <li> <a href="http://www.surlatable.com" target="_blank">Sur La Table</a></li>
                <li> <a href="http://www.bloomingdales.com" target="_blank">Bloomingdales</a></li>
                <li> <a href="http://www.amazon.com" target="_blank">Amazon.com</a></li>
                <li> <a href="http://www.target.com" target="_blank">Target.com</a></li>
                <li> <a href="http://www.eataly.com" target="_blank">Eataly</a></li>
              </ul>
            </div>
            <div class="stores">
              <ul>
                <li><a href="http://www.eataly.com" target="_blank"> Macys.com</a></li>
                <li><a href="http://www.wegmans.com" target="_blank"> Wegmans</a></li>
                <li><a href="http://www.southernseason.com/shop/best-sellers" target="_blank"> A Southern Season</a></li>
                <li><a href="http://www.bevmo.com" target="_blank"> BevMo!</a></li>
                <li><a href="http://www.hobbylobby.com/home.cfm" target="_blank"> Hobby Lobby</a></li>
                <li><a href="http://www.meijer.com" target="_blank"> Meijer</a></li>
                <li><a href="http://www.freshfinds.com" target="_blank"> Fresh Finds</a></li>
                <li><a href="http://www.basicsplus.com" target="_blank"> Basics Plus</a></li>
                <li><a href="http://www.chefscatalog.com" target="_blank"> Chef's Catalog</a></li>
                <li><a href="http://www.zabars.com" target="_blank"> Zabar's</a></li>
                <li> ...and many other fine retailers</li>
              </ul>
            </div>
            <div class="clearfix"></div>
          </div>
        </div>
        <div class="clearfix"></div>
        <div class="grey_line"></div>
        <?php require_once("../../inc/favourites.php"); ?>
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
</body>
</html>