<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Mailing List</title>
<link rel="stylesheet" type="text/css" href="styles.css" />
</head>
<body>
<?php require_once("constants.php"); ?>
<div id="maillist" align="center">
	<h1>Subscribe to our Mailing List</h1><br />
	<?php if(isset($_GET['message']) && $_GET['message'] == 2):
				echo $successMsg;
		  elseif(isset($_GET['message']) && $_GET['message'] == 1):
		  		echo $errorMsg;
		  elseif(isset($_GET['message']) && $_GET['message'] == 4):
		  		echo $unsubscribeMsg;
		  elseif(isset($_GET['message']) && $_GET['message'] == 5):
		  		echo $failUnsubscribeMsg;
		  else:
	?>
	Enter your email below to subscribe to our mailing list: <br /><br />
	<form method="post" action="update.php">
	<table>
	<tr><td>Name:</td><td><input type="text" name="name" /></td></tr>
	<tr><td>Email:</td><td><input type="text" name="email" /></td></tr>
	<tr><td>Are you human?:</td><td>Yes: <input type="radio" name="human" value="yes" /> No: <input type="radio" name="human" value="no" checked="checked" /></td></tr>
	<tr><td colspan="2" align="center"><input type="submit" name="addSubscriber" value="Subscribe!" /></td></tr>
	</table>
	</form>
	<?php if(isset($_GET['message']) && $_GET['message'] == 3) echo $emptyErrorMsg;
		  endif; ?>
</div>
</body>
</html>
