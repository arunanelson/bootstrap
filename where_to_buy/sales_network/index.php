<?php require_once("../../inc/domainModel.php");?>
<!DOCTYPE html>
<html lang="en">
<?php $pageTitle = "Where to Buy | Sales Network"; ?>
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
          <div class="article_left w240">
            <div class="m20b m20t" id="sales">SALES NETWORK</div>
            <div id="city">New York</div>
            <div id="address"> Bormioli Rocco Showroom<br>
              41 Madison Ave<br>
              16th &amp; 17th Floor<br>
              New York<br>
              NY, 10010</div>
            <div class="m5t"><span id="tel">Tel: (1) 212 719 0606</span><br>
              <span id="email">Email: <a class="red" href="mailto:info@bormioliroccousa.com">info@bormioliroccousa.com</a></span></div>
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
<span data-class="green_special" style="display:none" data-rep="Main Office" data-group-name="Northeast Group" data-email="office@northeastgroup.com" data-phone="(212) 696 – 4450"></span> 
<span data-class="na" style="display:none" data-rep="n/a" data-group-name="" data-email="n/a" data-phone="n/a"></span>
<span data-class="white" style="display:none" data-rep="Kate Rotunno" data-group-name="Bormioli Rocco" data-email="krotunno@bormioliroccousa.com" data-phone="(212) 719-0606 x 128"></span> 
<span data-class="emerald" style="display:none" data-rep="Main Office" data-group-name="Bang-Knudsen" data-email="orders@bang-knudsen.com" data-phone="(206) 767-6970"></span> 
<span data-class="green" style="display:none" data-rep="Main Office" data-group-name="Northeast Group" data-email="office@northeastgroup.com" data-phone="(781) 352-1400"></span> 
<span data-class="verde" style="display:none" data-rep="Doug Stadnyck" data-group-name="Marketing Directions" data-email="dcstadnyck@cox.net" data-phone="(480) 419-9812"></span> 
<span data-class="red" style="display:none" data-rep="Celine Mazurek" data-group-name="Celine Enterprises" data-email="celinent@wowway.com" data-phone="(248) 879-1011"></span> 
<span data-class="blue" style="display:none" data-rep="Main Office" data-group-name="J. Grob &amp; Associates" data-email="jillc@jgrobinc.com" data-phone="(301) 933-8657 x 15"></span> 
<span data-class="gold" style="display:none" data-rep="Main Office" data-group-name="Kasperzak &amp; Associates" data-email="ijkasperzak@aol.com" data-phone="(770) 664-7205"></span> 
<span data-class="ocean" style="display:none" data-rep="David Bell" data-group-name="Bell Marketing" data-email="bellbmg2@aol.com" data-phone="(213) 741-0797"></span> 
<span data-class="purple" style="display:none" data-rep="Laurel McMahon" data-group-name="McMahon Marketing" data-email="laurelmmcmahon@yahoo.com" data-phone="(925) 719-4713"></span> 
<span data-class="grey" style="display:none" data-rep="Main Office" data-group-name="Provenza &amp; Associates" data-email="darci@jprovenza.com" data-phone="(847) 297-2371"></span>
<?php require_once("../../inc/js.php"); ?>
<script type="text/javascript" language="javascript">
$(function($){
	$("#map").load("../../inc/list-usa.html", function(){
		 $('#map-usa').cssMap({
			'size' : 660,
			'cities' : true,		
			'tooltips' : 'floating',
			'onClick' : function(e){
				$("#city").text(e.text()); 
				 $("#address").html($("span[data-class=" + e.attr('data-rep') + "]").attr('data-group-name') + "<br>" + $("span[data-class=" + e.attr('data-rep') + "]").attr('data-rep'));
				 $("#tel").text("Tel: "+$("span[data-class=" + e.attr('data-rep') + "]").attr('data-phone'));
				 $("#email").html("Email: <a class=\"red\" href=\"mailto:" + $("span[data-class=" + e.attr('data-rep') + "]").attr('data-email') + "\">" + $("span[data-class=" + e.attr('data-rep') + "]").attr('data-email') + "</a>");
				 Cufon.replace('.article_left', { fontFamily: 'GillSans-Cufon', fontSize: '14px' });
				 Cufon.replace('#city', { fontFamily: 'BodoniBook-Cufon', fontSize: '28px', fontWeight: 'bold' });
			 }
		 });
		});
	});
</script>
</body>
</html>