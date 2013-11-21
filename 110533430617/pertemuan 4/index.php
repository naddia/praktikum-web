<!DOCTYPE html>
<head>
	<title>Halaman Administrator Naddia</title>
	
	<style type="text/css">
	.inner {
	margin: 200px auto;
	padding: 20px;
	width: 240px;
	border: 1px solid #333;
	}
	</style>
</head>

<body>
<?php
ini_set('display_errors', 1);
define('VALID', 1);

//include file eksternal
require_once('./auth.php');

init_login();
validate();

?>

<h3> Simulasi Halaman Admin Naddia</h3>

<p>
<a href="?m=logout">Logout</a>

<p>
Menu-menu admin ada disini
</p>
</body>
</html>