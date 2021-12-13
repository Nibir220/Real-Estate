<?php 
	session_start();
	if(isset($_COOKIE['flag'])){
?>

<!DOCTYPE html>
<html>
<head>
	<title>Home Page</title>
</head>
<body>
	<h1>Real Estate</h1>
	<a href="about.php">About </a> </br>
	
	
	<a href="myaccount.php">myaccount </a> </br>
	<a href="myproperty.php">myproperty </a> </br>
	<a href="editprofile.php">editprofile </a> </br>
	<a href="logout.php">logout </a>
	<a href="userlist.php">userlist </a> </br>
	<a href="search.php">search </a> </br>
</body>
</html>

<?php
	}else{
		header('location: login.html');
	}
?>


