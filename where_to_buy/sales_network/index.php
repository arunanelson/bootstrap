<?php require_once("../../inc/domainModel.php");?>
<!DOCTYPE html>
<html lang="en">
<?php require_once("../../inc/header.php");?>
<body>
<div class="container outercontainer shadow">
  <?php require_once("../../inc/nav.php");?>
    <div class="clearfix"></div>
  </div>
  <div class="container-fluid">
    <div class="row">
      <div class="span12">
        <div class="span3" id="pageTitle" title="where to buy">WHERE TO BUY</div>
        <div id="salesWrapper" class="m5t">
          <div class="article_left w200">
            <div class="m40b m20t" id="sales">SALES NETWORK</div>
            <span id="city">New York</span>
            <div id="address" class="m20t"> Bormioli Rocco Showroom<br>
              41 Madison Ave<br>
              17th Floor<br>
              New York<br>
              NY, 10010</div>
            <div class="m5t"><span id="tel">Tel: (1) 212 719 0606</span><br>
              Email: <a class="red" href="maito:info@bormioliroccousa.com">info@bormioliroccousa.com</a></div>
          </div>
          <div class="article_container">
            <div class="m-70t" id="map"> </div>
          </div>
        </div>
        <div class="clearfix"></div>
        <div class="grey_line m5t"></div>
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
<script type="text/javascript" language="javascript">
$(function($){
	$("#map").load("../../inc/list-usa.html", function(){
		 $('#map-usa').cssMap({
			'size' : 660,		
			'tooltips' : 'floating',
			'onClick' : function(e){
				$("#city").text(e.text()); 
				 $("#address").html("Bormioli Rocco Showroom<br>XX Lorem ipsum Ave<br>XXth Floor<br>" + e.text() + "<br>xx, xxxxx");
				 $("#tel").text("Tel: (x) xxx xxx xxxx");
				 Cufon.replace('.article_left', { fontFamily: 'GillSans-Cufon', fontSize: '14px' });
				 Cufon.replace('#city', { fontFamily: 'BodoniBook-Cufon', fontSize: '28px', fontWeight: 'bold' });
			 }
		 });
		});
	});
</script>
</body>
</html>