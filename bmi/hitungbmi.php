<?php 
	if(isset($_POST['hitung'])){
		$nama = $_POST['Nama'];
		$berat = $_POST['beratBadan'];
		$tinggi = $_POST['tinggi'];

		$bmi = $berat/($tinggi*$tinggi);

		echo "Hai ".$nama;
		echo "<br>";
		echo "Nilai BMI kamu = ".$bmi;
		echo "<br>";
		echo "Kamu termasuk ";

		if($bmi<18.5){
			echo "Kekurangan berat badan";
		} elseif ($bmi>=18.5 && $bmi<24.9) {
			echo "Normal / Ideal";
		} elseif ($bmi>=25 && $bmi<29.9) {
			echo "Kelebihan berat badan";
		} else {
			echo "Obesitas";
		}


	}

 ?>