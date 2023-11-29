<?php
	$Write="<?php $" . "UIDresult=''; " . "echo $" . "UIDresult;" . " ?>";
	file_put_contents('UIDContainer.php',$Write);
?>

<!DOCTYPE html>
<html lang="en">
<html>
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta charset="utf-8">
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<script src="js/bootstrap.min.js"></script>
		<style>
		html {
			font-family: Arial;
			display: inline-block;
			margin: 0px auto;
			text-align: center;
		}

		ul.topnav {
			list-style-type: none;
			margin: auto;
			padding: 0;
			overflow: hidden;
			background-color: #1E5A3C;
			width: 70%;
		}

		ul.topnav li {float: left;}

		ul.topnav li a {
			display: block;
			color: white;
			text-align: center;
			padding: 14px 16px;
			text-decoration: none;
		}

		ul.topnav li a:hover:not(.active) {background-color: #3e8e41;}

		ul.topnav li a.active {background-color: #333;}

		ul.topnav li.right {float: right;}

		@media screen and (max-width: 600px) {
			ul.topnav li.right, 
			ul.topnav li {float: none;}
		}
		
		img {
			display: block;
			margin-left: auto;
			margin-right: auto;
		}
		</style>
		
		<title>Home : Presence Management System</title>
	</head>
	
	<body>
		<h2>Presence Management System</h2>
		<ul class="nav nav-tabs topnav">
			<li class="nav-item"><a class="nav-link active" aria-current="page" href="home.php">Home</a></li>
			<li class="nav-item"><a class="nav-link" href="user data.php">User Data</a></li>
			<li class="nav-item"><a class="nav-link" href="registration.php">Registration</a></li>
			<li class="nav-item"><a class="nav-link" href="read tag.php">Read Tag ID</a></li>
		</ul>
		<br>
		<h3>Presence Management System</h3>
		
		<img src="home_page.png" alt="" style="width:55%;">
	</body>
</html>