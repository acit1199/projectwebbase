<?php
	@session_start();
	include "../database/conndb.php";

	if (@$_SESSION['user']) {
		$user = @$_SESSION['user'];

		$sql = mysql_query("SELECT * FROM user WHERE username = '$user'") or die(mysql_error());
		$data = mysql_fetch_array($sql);
		$result = mysql_num_rows($sql);
		$usertype = $data['access'];
		if ($usertype === "admin") {
			$userid = $user;
			$sql = mysql_query("SELECT * FROM user WHERE username = '$userid'") or die(mysql_error());
			$data = mysql_fetch_array($sql);
			$result = mysql_num_rows($sql);

			@$_SESSION['user'] = $userid;
?>
<html>
<head>
	<title>Admin Panel</title>
	<script src="https://kit.fontawesome.com/a076d05399.js"></script>
	<link rel="stylesheet"type="text/css"href="../css/adminstyle.css"/>
</head>
<body>
<div id="header"><br><br>
	<div class="adminlogo"><a href="#">Admin<span>Dashboard</span></a></div><br><br><br>
</div>

<div id="container">
<div id="sidebar">
	<ul id="nav">
		<li><a class="dash"href="homepageadmin.php">Dashboard</a></li>
		<li><a href="additem.php">Add Data</a></li>
		<li><a href="deleteitem.php">Delete Data</a></li>
		<li><a href="updateitem.php">Update Data</a></li>
		<li><a href="summaryitem.php">Summary Data</a></li>
		<li><a href="daffa.php">Developer Email</a></li>
		<li><a href="../sign-out.php">Log Out</a></li>
	</ul>
</div>

<div id="content">
	<h1>  Dashboard </h1><br>
	<p>Details</p><br>

	<div id="info">
		<div class="info-one">Info </div>
		<div class="info-panel">Php </div>
		
	</div>

	<div id="info">
		<div class="info-one">Info </div>
		<div class="info-panel">Php </div>
		
	</div>

	<div id="info">
		<div class="info-one">Info </div>
		<div class="info-panel">Php </div>
		
	</div>
</div>
</div>
<footer>mi store</footer>
</body>
</html>
<?php
		}
		elseif ($usertype === "user") {
			?><script type="text/javascript">location.replace("../admin/homepageadmin.php");</script><?php
		}
		else{
			?><script type="text/javascript">location.replace("../index.php");</script><?php
		}
	}
	else{
		?><script type="text/javascript">location.replace("../index.php");</script><?php
	}
?>