<?php #connector.php
	DEFINE ('USER','sql345918');
	DEFINE ('PASS', 'mB9%wQ1*');
	DEFINE ('HOST','sql3.freesqldatabase.com');
	DEFINE ('SITE_NAME','sql345918');

	$database=@mysqli_connect(USER,PASS,HOST,SITE_NAME) OR die ('Could not connect to MySQL: ' . mysqli_connect_error());

	mysqli_set_charset($database, 'utf8');
?>
/*
Your account number is: 63526

Your new database is now ready to use.

Host: sql3.freesqldatabase.com

Database name: sql345918

Database user: sql345918

Database password: mB9%wQ1*

Port number: 3306
*/