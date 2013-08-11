<!DOCTYPE html>
<html lang="en">
<?php require_once("inc/header.php");?>
<body>
<div class="container outercontainer shadow">
  <?php require_once("inc/nav.php");?>
    <div class="clearfix"></div>
  </div>
  <div class="container-fluid">
    <div class="row">
      <div class="span12">
        <div class="span3" id="whatsNew" title="Sales Network">SALES NETWORK</div>
        <div id="salesWrapper" class="m5t">
          <div class="sales_left">
            <div class="m40b" id="sales">SALES NETWORK</div>
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
            <div class="m-70t">
              <div id="map-usa">
                <ul class="usa">
                  <li class="usa1"><a href="#alabama">Alabama</a></li>
                  <li class="usa2"><a href="#alaska">Alaska</a></li>
                  <li class="usa3"><a href="#arizona">Arizona</a></li>
                  <li class="usa4"><a href="#arkansas">Arkansas</a></li>
                  <li class="usa5"><a href="#california">California</a></li>
                  <li class="usa6"><a href="#colorado">Colorado</a></li>
                  <li class="usa7"><a href="#connecticut">Connecticut</a></li>
                  <li class="usa8"><a href="#delaware">Delaware</a></li>
                  <li class="usa9"><a href="#florida">Florida</a></li>
                  <li class="usa10"><a href="#georgia">Georgia</a></li>
                  <li class="usa11"><a href="#hawaii" class="tooltip-middle">Hawaii</a></li>
                  <li class="usa12"><a href="#idaho">Idaho</a></li>
                  <li class="usa13"><a href="#illinois">Illinois</a></li>
                  <li class="usa14"><a href="#indiana">Indiana</a></li>
                  <li class="usa15"><a href="#iowa">Iowa</a></li>
                  <li class="usa16"><a href="#kansas">Kansas</a></li>
                  <li class="usa17"><a href="#kentucky">Kentucky</a></li>
                  <li class="usa18"><a href="#louisiana">Louisiana</a></li>
                  <li class="usa19"><a href="#maine">Maine</a></li>
                  <li class="usa20"><a href="#maryland">Maryland</a></li>
                  <li class="usa21"><a href="#massachusetts">Massachusetts</a></li>
                  <li class="usa22"><a href="#michigan">Michigan</a></li>
                  <li class="usa23"><a href="#minnesota">Minnesota</a></li>
                  <li class="usa24"><a href="#mississippi">Mississippi</a></li>
                  <li class="usa25"><a href="#missouri">Missouri</a></li>
                  <li class="usa26"><a href="#montana">Montana</a></li>
                  <li class="usa27"><a href="#nebraska">Nebraska</a></li>
                  <li class="usa28"><a href="#nevada">Nevada</a></li>
                  <li class="usa29"><a href="#new-hampshire">New Hampshire</a></li>
                  <li class="usa30"><a href="#new-jersey">New Jersey</a></li>
                  <li class="usa31"><a href="#new-mexico">New Mexico</a></li>
                  <li class="usa32"><a href="#new-york">New York</a></li>
                  <li class="usa33"><a href="#north-carolina">North Carolina</a></li>
                  <li class="usa34"><a href="#north-dakota">North Dakota</a></li>
                  <li class="usa35"><a href="#ohio">Ohio</a></li>
                  <li class="usa36"><a href="#oklahoma">Oklahoma</a></li>
                  <li class="usa37"><a href="#oregon">Oregon</a></li>
                  <li class="usa38"><a href="#pennsylvania">Pennsylvania</a></li>
                  <li class="usa39"><a href="#rhode-island">Rhode Island</a></li>
                  <li class="usa40"><a href="#south-carolina">South Carolina</a></li>
                  <li class="usa41"><a href="#south-dakota">South Dakota</a></li>
                  <li class="usa42"><a href="#tennessee">Tennessee</a></li>
                  <li class="usa43"><a href="#texas">Texas</a></li>
                  <li class="usa44"><a href="#utah">Utah</a></li>
                  <li class="usa45"><a href="#vermont">Vermont</a></li>
                  <li class="usa46"><a href="#virginia">Virginia</a></li>
                  <li class="usa47"><a href="#washington">Washington</a></li>
                  <li class="usa48"><a href="#washington-dc">Washington DC</a></li>
                  <li class="usa49"><a href="#west-virginia">West Virginia</a></li>
                  <li class="usa50"><a href="#wisconsin">Wisconsin</a></li>
                  <li class="usa51"><a href="#wyoming">Wyoming</a></li>
                  <li class="usa52"><a href="#puerto-rico">Puerto Rico</a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
        <div class="clearfix"></div>
        <div class="grey_line m5t"></div>
        <?php require_once("inc/favourites.php"); ?>
        <!--/row--> 
      </div>
      <!--/span--> 
    </div>
    <!--/row--> 
  </div>
  <?php require_once("inc/footer.php"); ?>
  <!--/.fluid-container--> 
</div>
<?php require_once("inc/js.php"); ?>
<script type="text/javascript" language="javascript">
$(function($){
  // invoke function with specified size and floating tooltips;
  $('#map-usa').cssMap({
    'size' : 660,		
    'tooltips' : 'floating',
	'onClick' : function(e){
		$("#city").text(e.text()); 
		 $("#address").html("Bormioli Rocco Showroom<br>XX Lorem ipsum Ave<br>XXth Floor<br>" + e.text() + "<br>xx, xxxxx");
		 $("#tel").text("Tel: (x) xxx xxx xxxx");
		 Cufon.replace('.sales_left', { fontFamily: 'GillSans-Cufon', fontSize: '14px' });
		 Cufon.replace('#city', { fontFamily: 'BodoniBook-Cufon', fontSize: '28px', fontWeight: 'bold' });
	 }
   });
});
</script>
</body>
</html>