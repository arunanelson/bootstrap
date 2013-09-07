<footer>
  <div class="footer-top">
    <div id="signup">
      <h4 class="footer-header">Sign up!</h4>
      <div class="footer-text"> <a href="#">Get Bormioli Rocco<br />
        news in your inbox</a>
        <div id="signupFrm">
          <form class="navbar-form pull-left">
            <input class="span2" id="signUpPlaceholder" type="text" placeholder="Email">
          </form>
        </div>
      </div>
    </div>
    <div id="products">
      <h4 class="footer-header">Products</h4>
      <div class="footer-text" id="footer-products-1"> <a href="<?php echo BASE_URL; ?>products/whats_new">New Products</a><br />
        <a href="<?php echo BASE_URL; ?>products/?group=1&cat=1">Stemware/Tumblers</a><br />
        <a href="<?php echo BASE_URL; ?>products/?group=1&cat=2">Beer</a><br />
        <a href="<?php echo BASE_URL; ?>products/?group=1&cat=3">Carafes</a> </div>
      <div class="footer-text" id="footer-products-2"> <a href="<?php echo BASE_URL; ?>products/?group=1&cat=4">Coffee &amp; Tea</a><br />
        <a href="<?php echo BASE_URL; ?>products/?group=2&cat=11">Dinnerware</a><br />
        <a href="<?php echo BASE_URL; ?>products/?group=3">Multicolor</a><br />
        <a href="<?php echo BASE_URL; ?>products/?group=4&cat=5">Housewares</a> </div>
      <div class="footer-text" id="footer-products-3"> <a href="<?php echo BASE_URL; ?>products/?group=4&cat=6">Canning</a><br />
        <a href="<?php echo BASE_URL; ?>products/?group=4&cat=7">Bowls</a><br />
        <a href="<?php echo BASE_URL; ?>products/?group=4&cat=8">Bottles</a><br />
        <a href="<?php echo BASE_URL; ?>products/?group=5">Giftware</a> </div>
      <div class="clearfix"></div>
    </div>
    <div id="about">
      <h4 class="footer-header">About</h4>
      <div class="footer-text"> <a class="scrollItem" href="#ourhistory">Who we are</a><br />
        <a href="<?php echo BASE_URL; ?>where_to_buy/stores">Where to buy</a><br />
        <a href="<?php echo BASE_URL; ?>contact">Contact</a><br />
        <div class="clearfix"></div>
        <div class="faceBookWhite" title="FaceBook"></div>
        <div class="twitterWhite" title="Twitter"></div>
      </div>
    </div>
    <div class="clearfix"></div>
  </div>
  <div class="footer-bottom">
    <p> Registered office: Bormioli Rocco Glass Co Inc. | 41 Madison Ave | 16th &amp; 17th Floor | New York | NY | 10010 | USA	Tel: (1) 212 719 0606<br>
      &copy;
      <?php
                            $time = time () ;
                            $year= date("Y",$time);
                            echo $year;?>
      Bormioli Rocco USA,  All Rights Reserved. Company registration no: xxxxxxx | VAT no: xxx xxxx xx </p>
  </div>
</footer>
