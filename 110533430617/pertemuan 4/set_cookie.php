<!DOCTYPE html 
	PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>
	<title>Set Cookie Naddia</title>
</head>

<body>
<?php
//Men set nilai cookie
setcookie('nama_cookie', 'nilai_cookie');

//mendapatkan nilai cookie
echo $_COOKIE['nama_cookie'];
?>
<p>
Tekan refresh (F5);
</body>
</html>