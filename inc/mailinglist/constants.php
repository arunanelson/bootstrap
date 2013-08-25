<?php

// MySQL Connection Credentials
define("HOSTNAME", "localhost"); // MySQL hostname
define("USERNAME", 'root'); // MySQL username
define("PASSWORD", "admin"); // MySQL password
define("DATABASE", 'faith'); // MySQL database name

$hostname_db_connect = "mysql5.controldns.co.uk";
$database_db_connect = "faith";
$username_db_connect = "aruna1";
$password_db_connect = "October2009";

// Link to where the Mailing List System is ... DO NOT ADD A FORWARD SLASH (/) AND THE END OF THE LINK
$websiteURL = "http://www.nevergiveupfaith.com/mailinglist";

// Subscriber Email Wait
$limit = 20;
// Subscriber Email Wait Time in seconds
$timeLimit = 3;

// Add New Subscriber Success Message
$successMsg = "<font color='green'>Congratulations! You have successfully subscribed to our mailing list</font>";
// Add New Subscriber Error Message
$errorMsg = "<font color='red'>Error: This e-mail is already subscribed to the mailinglist</font>";
// Add New Subscriber Empty Field Message
$emptyErrorMsg = "<font color='red'>Error: Invalid inputs. Try again</font>";

// Unsubscribe Message
$unsubscribeMsg = "<font color='green'>You have been successfully unsubscribed from the mailing list</font>";
// Failure to Unsubscribe Message
$failUnsubscribeMsg = "<font color='red'>Unsubscription failed. Please e-mail <a href='mailto:streek@designsector.org'>Streek</a> to unsubscribe</font>";

// Admin Login Incorrect Credentials
$incorrectMsg = "<font color='red'>Error: Email or password was incorrect</font>";
// Admin Login Empty Field Message
$adminEmptyErrorMsg = "<font color='red'>Error: One or more fields might be left blank</font>";
// Admin Successful Password Change
$passwordSuccess = "<font color='green'>Your password has been successfully changed</font>";
// Admin Incorrect Password Change
$passwordFail = "<font color='red'>Error: Incorrect credentials</font>";
// Admin Name Change Success
$nameSuccess = "<font color='green'>Your name was successfully changed</font>";
// Admin Email Change Success
$emailSuccess = "<font color='green'>Your email was successfully changed</font>";

?>