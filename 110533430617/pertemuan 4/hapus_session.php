<!DOCTYPE html>
<head>
	<title>Hapus Session Naddia</title>
</head>

<body>
<?php

//inisialisasi data session
session_start();

//set session jika belum ada
if (!isset($_SESSION['test'])) {
	$_SESSION['test']= 'value';
	
	//hapus session test
	unset ($_SESSION['test']);
	
	echo 'session dihapus';
	
} else {
	echo 'unset';
	
	//mencetak semua elemen session
	print_r($_SESSION);
}

?>
<p>
Tekan refresh (F5);
</p>
</body>
</html>