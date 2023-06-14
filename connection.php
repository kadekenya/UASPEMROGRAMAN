<?php
		$koneksi = mysqli_connect("localhost", "root", "", "data_penjualan",3306);

		if(!$koneksi) {
			die("connection error".mysqli_connect_error());
		}
		
	?>