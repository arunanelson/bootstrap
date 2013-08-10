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
        <div class="span3" id="whatsNew" title="Contact Us">CONTACT US</div>
        <div id="productsWrapper">
          <div class="article_left">
            <div>Feel free to get in touch if you have<br>
              any questions about our products!</div>
            <div class="m5t">BORMIOLI ROCCO USA<br>
              41 Madison Ave<br>
              17th Floor<br>
              New York<br>
              NY, 10010</div>
            <div class="m5t">Tel: (1) 212 719 0606<br>
              Email: <a class="red" href="maito:info@bormioliroccousa.com">info@bormioliroccousa.com</a></div>
            <div class="m5t">Like us on <a class="red" href="#">Facebook</a><br>
              Follow us on <a class="red" href="#">Twitter</a></div>
          </div>
          <div class="article_container">
            <form>
              <fieldset>
                <div class="form-group">
                  <input type="text" class="form-control" id="inputName" placeholder="Name">
                  <input type="text" class="form-control" id="inputEmail" placeholder="Email">
                </div>
                <div class="form-group m5t" id="contactSubject">
                  <input type="text" class="form-control" id="inputSubject" placeholder="Subject">
                </div>
                <div class="form-group m5t">
                  <textarea class="form-control" rows="3" placeholder="Enquiry"></textarea>
                </div>
                <button type="submit" class="btn btn-default">Submit</button>
              </fieldset>
            </form>
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
</body>
</html>