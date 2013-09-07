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
                <li> Bed Bath &amp; Beyond &amp; BedBath&amp;Beyond.com</li>
                <li> Container Store &amp; ContainerStore.com</li>
                <li> Crate &amp; Barrel &amp; Crate&amp;Barrel.com</li>
                <li> Williams Sonoma &amp; WilliamsSonoma.com</li>
                <li> West Elm &amp; WestElm.com</li>
                <li> Sur La Table &amp; SurlaTable.com</li>
                <li> Bloomingdales &amp; Bloomingdales.com</li>
                <li> Amazon.com</li>
                <li> Target.com </li>
                <li> Eataly</li>
              </ul>
            </div>
            <div class="stores">
              <ul>
                <li> Macys.com</li>
                <li> Wegmans</li>
                <li> A Southern Season</li>
                <li> BevMo!</li>
                <li> Hobby Lobby</li>
                <li> Meijer</li>
                <li> Fresh Finds</li>
                <li> Basics Plus</li>
                <li> Chef's Catalog</li>
                <li> Zabar's</li>
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