<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>BMI</title>
</head>
<body>
	<form action="hitungbmi.php" method="POST">
		<h2>Aplikasi Hitung BMI</h2>
		<table border="0">
			<tr>
				<td>Nama</td>
				<td>:</td>
				<td><input type="text" name="Nama" placeholder="nama lengkap"></td>
			</tr>
			<tr>
				<td>Berat Badan</td>
				<td>:</td>
				<td><input type="text" name="beratBadan" placeholder="berat dalam (kg)"></td>
			</tr>
			<tr>
				<td>Tinggi Badan</td>
				<td>:</td>
				<td><input type="text" name="tinggi" placeholder="berat dalam (kg)"></td>
			</tr>
			<tr>
				<td></td>
				<td></td>
				<td><input type="submit" name="hitung" value="hitung"></td>
			</tr>
		</table>
	</form>
</body>
</html>