<?php
	function dbconnect()
	{
		static $connect = null;
		if ($connect === null) {
			$connect = mysqli_connect('mysql-andriniaina.alwaysdata.net','268459_andry','andriniaina10','andriniaina_climat') or die ("Unable to connect to 'reference'");
		}
		// mysqli_set_charset($connect, 'utf8');
		return $connect;
	}
	
?>