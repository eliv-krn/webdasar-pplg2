<?php 
	if (isset($_POST['kirim'])) {
		$angka1 = $_POST['a1'];
		$angka2 = $_POST['a2'];
		$hasil = $angka1 + $angka2;
	}

	echo "Hasilnya adalah = ".$hasil;


 ?>