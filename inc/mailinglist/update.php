<?php
session_name(md5($_SERVER['REMOTE_ADDR']));
session_start();
require_once("constants.php");

function connect(){
	$conn = new MySQLi(HOSTNAME, USERNAME, PASSWORD, DATABASE) or die(mysqli_error()); 
	return $conn;
}
// Change Email
if(!empty($_POST['changeEmail'])){
	$email = $_POST['email'];
	$id = $_SESSION['id'];
	$sql = "UPDATE subscribers SET email='$email' WHERE id='$id'";
	$conn = connect();
	$result = $conn->query($sql);
	$_SESSION['email'] = $email;
	header("Location: admin.php?message=6");
}

// Change Name
if(!empty($_POST['changeName'])){
	$name = $_POST['name'];
	$id = $_SESSION['id'];
	$sql = "UPDATE subscribers SET name='$name' WHERE id='$id'";
	$conn = connect();
	$result = $conn->query($sql);
	$_SESSION['name'] = $name;
	header("Location: admin.php?message=5");
}

// Change Password
if(!empty($_POST['changePassword'])){
	$currPass = $_POST['currPass'];
	$newPass = $_POST['newPass'];
	$newPass2 = $_POST['newPass2'];
	$conn = connect();
	if(!empty($currPass) && !empty($newPass) && !empty($newPass2) && ($newPass == $newPass2)){
		$password = md5($newPass);
		$currPass = md5($currPass);
		$sql = "SELECT id FROM subscribers WHERE password='$currPass'";
		$result = $conn->query($sql);
		if($result->num_rows == 1){
			$sql = "UPDATE subscribers SET password='$password' WHERE role='admin'";
			$result = $conn->query($sql);
			header("Location: admin.php?message=3");
		} else {
			header("Location: admin.php?page=3&message=4&reason=failcurr");
		}
	} else {
		header("Location: admin.php?page=3&message=4&reason=nomatch");
	}
}

// View Subscribers
function listSubscribers(){
	$sql = "SELECT email, password FROM subscribers WHERE role='subscriber'";
	$conn = connect();
	$content = "<div align='center'><h3>List of Subscribers</h3></div><table border='1' cellpadding='8' cellspacing='0' align='center'>";
	$counter = 1;
	if($result = $conn->query($sql)){
		while($row = $result->fetch_object()){
			$content .= "<tr><td>{$counter}</td><td>{$row->name}</td><td>{$row->email}</td><td><a href='update.php?unsubscribe={$row->password}&method=force'>Delete</a></td></tr>";
			$counter++;
		}
		$content .= "</table><br /><div align='center'>Total Subscribers: {$result->num_rows}</div>";
		return $content;
	}
}

// Unsubscribe from mailing list
if(!empty($_GET['unsubscribe'])){
	$code = $_GET['unsubscribe'];
	$sql = "DELETE FROM subscribers WHERE password=?";
	$conn = connect();
	if($stmt = $conn->prepare($sql)){
		$stmt->bind_param("s", $code);
		$stmt->execute();
		if($stmt->affected_rows == 1){
			if(isset($_GET['method']) && $_GET['method'] == 'force')
				header("Location: admin.php?page=2");			
			else
				header("Location: index.php?message=4");
		} else {
			header("Location: index.php?message=5");
		}
	}
}

// Send Newsletter
if(!empty($_POST['sendNewsletter'])){
	$title = $_POST['title'];
	$message = $_POST['message'];
	if(!empty($title) && !empty($message)){
		$conn = connect();
		$sql = "SELECT email, password FROM subscribers WHERE role='subscriber'";
		$counter = 1;
		if($result = $conn->query($sql)){
			while($row = $result->fetch_object()){
				if(ceil($counter/$limit) == ($counter/$limit)) sleep($timeLimit);
				$to = $row->email;
				$password = $row->password;
				$headers  = 'MIME-Version: 1.0' . "\r\n";
				$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
				$headers .= 'From: ' . $_SESSION['name'] . ' <' . $_SESSION['email'] . '>' . "\r\n";
				$email = nl2br($message);
				$email .= "<br /><br />To unsubscribe from the mailing list, click on the following link: <a href='$websiteURL/update.php?unsubscribe=$password'>UNSUBSCRIBE ME</a>";
				mail($to, $title, $email, $headers);
				$counter++;
			}
			header("Location: admin.php?page=1&sent={$result->num_rows}");
		}
	} else {
		header("Location: admin.php?message=2");
	}
}

// Admin Login
if(isset($_POST['loginAdmin'])){
	$email = $_POST['email'];
	$password = $_POST['password'];
	if(!empty($email) && !empty($password)){
		$conn = connect();
		$sql = "SELECT id, name FROM subscribers WHERE email=? AND password=? AND role='admin'";

		if($stmt = $conn->prepare($sql)){
			$stmt->bind_param("ss", $email, md5($password));
			$stmt->execute();
			$stmt->bind_result($id, $name);
			if($stmt->fetch()){
				session_regenerate_id();
				$_SESSION['id'] = $id;
				$_SESSION['name'] = $name;
				$_SESSION['email'] = $email;
				header("Location: admin.php");
			} else {
				header("Location: admin.php?message=1");
			}
		}
	} else {
		header("Location: admin.php?message=2");
	}
}

// Logout
if(isset($_GET['page']) && $_GET['page'] == 'logout'){
	$_SESSION = array();
	session_destroy();
	header("Location: admin.php");
}

// Add New Subscriber
if(!empty($_POST['addSubscriber'])){
	$name = $_POST['name'];
	$email = $_POST['email'];
	$human = $_POST['human'];
	if(!empty($name) && !empty($email) && $human == 'yes' && eregi("^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$", $email) != FALSE){
		$conn = connect();
		$sql = "SELECT id FROM subscribers WHERE email=?";
		if($stmt = $conn->prepare($sql)){
			$stmt->bind_param("s", $email);
			$stmt->execute();
			if($stmt->fetch()){
				header("Location: index.php?message=1");
			} else {
				$password = md5(uniqid());
				$sql2 = "INSERT INTO subscribers(name, email, password) VALUES(?, ?, '$password')";
				if($stmt2 = $conn->prepare($sql2)){
					$stmt2->bind_param("ss", $name, $email);
					$stmt2->execute();
					if($stmt2->affected_rows == 1)
						header("Location: index.php?message=2");
				}
			}
		}
	} else {
		header("Location: index.php?message=3");
	}
}
?>