<?php
	define ('DB_HOST','localhost');
	define ('DB_USER','root');
	define ('DB_PASS','');
	define ('DB_NAME','bao');
	$db = mysqli_connect(DB_HOST,DB_USER,DB_PASS,DB_NAME);
	mysqli_query($db,"SET CHARACTER SET 'utf8'");
	mysqli_query($db,"SET SESSION collation_connection ='utf8_unicode_ci'");
?>