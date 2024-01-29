<?php 
	if (isset($_POST['hitung'])) {
		$a1 = $_POST['a1'];
		$a2 = $_POST['a2'];
		$op = $_POST['op'];

		if($op == "tambah"){
			$hasil = $a1 + $a2;
		}else if($op == "kurang"){
			$hasil = $a1 - $a2;
		}else if($op == "kali"){
			$hasil = $a1 * $a2;
		}else if($op == "bagi"){
			if($a2 == 0){
				$hasil = "Pembagi tidak bisa 0";
			}else{
				$hasil = $a1 / $a2;
			}
			
		}
	}

	echo "Hasil perhitungan = ".$hasil;

 ?>