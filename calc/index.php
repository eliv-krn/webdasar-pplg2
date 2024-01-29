<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Calculator</title>
</head>
<body>
	<h2>Aplikasi Kalkulator</h2>
	<form action="calculator.php" method="POST">
	<input type="text" name="a1" placeholder="angka pertama">
	<select name="op">
		<option value="tambah">+</option>
		<option value="kurang">-</option>
		<option value="kali">*</option>
		<option value="bagi">/</option>
	</select>
	<input type="text" name="a2" placeholder="angka kedua">
	<input type="submit" name="hitung" value="hitung">
	</form>
</body>
</html>