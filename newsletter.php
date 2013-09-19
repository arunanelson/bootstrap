<?php

      	$to = $_GET['email'];
        $headers = "From: {$_GET['email']}\r\nBcc: newsletters@bormiolirocco.com";
        $subject = "A new user has subscribed to the newsletter";
        $body = "Email: " . $_GET['email'];

        mail($to, $subject, $body, $headers);

        header("Location: http://www.bormioliroccousa.com/contact/thank-you/#/".$_GET['email']);
		die();

?>