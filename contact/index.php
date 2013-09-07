<?php require_once("../inc/domainModel.php");?>
<?php
/*
    Contact Form from HTML Form Guide
    This program is free software published under the
    terms of the GNU Lesser General Public License.
    See this page for more info:
    http://www.html-form-guide.com/contact-form/php-contact-form-tutorial.html
*/
require_once("../inc/fgcontactform.php");

$formproc = new FGContactForm();


//1. Add your email address here.
//You can add more than one receipients.
$formproc->AddRecipient('info@bormiolirocco.com'); //<<---Put your email address here


//2. For better security. Get a random tring from this link: http://tinyurl.com/randstr
// and put it here
$formproc->SetFormRandomKey('CnRrspl1FyEylUj');


if(isset($_POST['submitted']))
{
   if($formproc->ProcessForm())
   {
        $formproc->RedirectToURL("thank-you");
   }
}
$pageTitle = "Contact Us";
?>
<!DOCTYPE html>
<html lang="en">
<?php require_once("../inc/header.php");?>
<body>
<div class="container outercontainer shadow">
  <?php require_once("../inc/nav.php");?>
    <div class="clearfix"></div>
  </div>
  <div class="container-fluid">
    <div class="row">
      <div class="span12">
        <div class="span3" id="pageTitle" title="Contact Us">CONTACT US</div>
        <div id="productsWrapper">
          <div class="article_left w300">
            <div>Feel free to get in touch if you have<br>
              any questions about our products!</div>
            <div class="m5t">BORMIOLI ROCCO USA<br>
              41 Madison Ave<br>
              16th &amp; 17th Floor<br>
              New York<br>
              NY, 10010</div>
            <div class="m5t">Tel: (1) 212 719 0606</div>
            <div class="m5t">Like us on <a class="red" href="#">Facebook</a><br>
              Follow us on <a class="red" href="#">Twitter</a></div>
          </div>
          <div class="article_container">
            <form id='contactus' action='<?php echo $formproc->GetSelfScript(); ?>' method='post' accept-charset='UTF-8'>
              <fieldset>
                <input type='hidden' name='submitted' id='submitted' value='1'/>
                <input type='hidden' name='<?php echo $formproc->GetFormIDInputName(); ?>' value='<?php echo $formproc->GetFormIDInputValue(); ?>'/>
                <input type='text'  class='spmhidip' name='<?php echo $formproc->GetSpamTrapInputName(); ?>' />
                <div><span class='error'><?php echo $formproc->GetErrorMessage(); ?></span></div>
                <div class="form-group">
                  <input type="text" class="form-control" id="name" name="name" value='<?php echo $formproc->SafeDisplay('name') ?>' placeholder="Name">
                  <input type="text" class="form-control" id="email" name="email" value='<?php echo $formproc->SafeDisplay('email') ?>' placeholder="Email">
                </div>
                <div class="form-group m5t" id="contactSubject">
                  <input type="text" class="form-control" id="subject" name="subject" value='<?php echo $formproc->SafeDisplay('subject') ?>' placeholder="Subject">
                </div>
                <div class="form-group m5t">
                  <textarea class="form-control" rows="3" id="message" name="message" value='<?php echo $formproc->SafeDisplay('message') ?>' placeholder="Enquiry"></textarea>
                </div>
                <div id='contactus_name_errorloc' class='error'></div> 
                <div id='contactus_email_errorloc' class='error'></div> 
                <div id='contactus_message_errorloc' class='error'></div>
                <input type='submit' name='Submit' value='Send Message' class="button highlight small"/>
              </fieldset>
            </form>
          </div>
        </div>
        <div class="clearfix"></div>
        <div class="grey_line m5t"></div>
        <?php require_once("../inc/favourites.php"); ?>
        <!--/row--> 
      </div>
      <!--/span--> 
    </div>
    <!--/row--> 
  </div>
  <?php require_once("../inc/footer.php"); ?>
  <!--/.fluid-container--> 
</div>
<?php require_once("../inc/js.php"); ?>
<!-- client-side Form Validations:
Uses the excellent form validation script from JavaScript-coder.com--> 

<script type='text/javascript'>
// <![CDATA[

    var frmvalidator  = new Validator("contactus");
    frmvalidator.EnableOnPageErrorDisplay();
    frmvalidator.EnableMsgsTogether();
    frmvalidator.addValidation("name","req","Please provide your name");

    frmvalidator.addValidation("email","req","Please provide your email address");

    frmvalidator.addValidation("email","email","Please provide a valid email address");
		
    frmvalidator.addValidation("message","maxlen=2048","The message is too long!(more than 2KB!)");

// ]]>
</script>
</body>
</html>