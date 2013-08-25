<?php
	session_name(md5($_SERVER['REMOTE_ADDR']));
	session_start();
	require_once("constants.php");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Mailing List Admin Panel</title>
<link rel="stylesheet" type="text/css" href="styles.css" />
</head>
<body>
<div id="maillist">
	<h1 align='center'>Mailing List Admin Panel</h1><br />
	<?php if(isset($_SESSION['id'])): ?>
	Welcome <?php echo $_SESSION['name']; ?> | <a href='update.php?page=logout'>Logout</a>
	<ul>
		<li><a href="admin.php?page=1">Send Newsletter</a></li>
		<li><a href="admin.php?page=2">View Subscribers</a></li>
		<li><a href="admin.php?page=3">Edit Account</a></li>
	</ul><hr />
	<?php if(isset($_GET['page'])): if($_GET['page'] == 1): ?>
	<div align='center'><h3>Send Newsletter</h3></div>
	<?php if(isset($_GET['sent'])): echo "Newsletter sent successfully!<br />Sent to {$_GET['sent']} subscribers"; else: ?>
	<form method="post" action="update.php">
	Message Title: <input type="text" name="title" /><br />
	Newsletter:<br />
	<textarea name="message" rows="10" cols="34"></textarea><br />
	<div align='center'><input type="submit" name="sendNewsletter" value="Send Newsletter" /></div>
	</form>
	<?php endif; elseif($_GET['page'] == 2): ?>
	<?php require_once("update.php"); echo listSubscribers(); ?>
	<?php elseif($_GET['page'] == 3): ?>
	<div align='center'><h3>Change Name</h3>
	<form method="post" action="update.php">
	New Name: <input type="text" name="name" /><br />
	<input type="submit" name="changeName" value="Change Name" /></div>
	</form>
	<hr />
	<div align='center'><h3>Change Email</h3>
	<form method="post" action="update.php">
	New Email: <input type="text" name="email" /><br />
	<input type="submit" name="changeEmail" value="Change Email" /></div>
	</form>
	<hr />
	<div align='center'><h3>Change Password</h3></div>
	<form method="post" action="update.php">
	<table>
	<tr><td>Current Password:</td><td><input type="password" name="currPass" /></td></tr>
	<tr><td>New Password:</td><td><input type="password" name="newPass" /></td></tr>
	<tr><td>Confirm New Password:</td><td><input type="password" name="newPass2" /></td></tr>
	</table>
	<div align='center'><input type="submit" name="changePassword" value="Change Password" /></div>
	</form>
	<?php if(isset($_GET['message']) && $_GET['message'] == 4) echo "<div align='center'>$passwordFail</div>"; ?>
	<?php endif; endif; else: ?>
	<form method="post" action="update.php">
	<table align="center">
	<tr><td>Email:</td><td><input type="text" name="email" /></td></tr>
	<tr><td>Password:</td><td><input type="password" name="password" /></td></tr>
	<tr><td colspan="2" align="center"><input type="submit" name="loginAdmin" value="Login" /></td></tr>
	</table>
	</form>
	<?php endif;
		  if(isset($_GET['message']) && $_GET['message'] == 1) echo "<div align='center'>$incorrectMsg</div>";
		  elseif(isset($_GET['message']) && $_GET['message'] == 2) echo "<div align='center'>$adminEmptyErrorMsg</div>";
		  elseif(isset($_GET['message']) && $_GET['message'] == 3) echo "<div align='center'>$passwordSuccess</div>";
		  elseif(isset($_GET['message']) && $_GET['message'] == 6) echo "<div align='center'>$emailSuccess</div>";
		  elseif(isset($_GET['message']) && $_GET['message'] == 5) echo "<div align='center'>$nameSuccess</div>"; ?>
</div>
</body>
</html>
