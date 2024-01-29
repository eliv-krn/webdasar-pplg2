<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="form.php" method="POST">
        <label for="">Nama</label> <br>
        <input type="text" name="nama" id=""> <br>
        <label for="">Kata-kata hari ini</label> <br>
        <input type="text" name="kata" id=""> <br> <br>
        <input type="submit" value="kirim" name="kirim">
    </form>

    <?php
    // Memeriksa apakah formulir telah dikirim
    if (isset($_POST['kirim'])) {
        $nama = $_POST["nama"];
        $kata = $_POST["kata"];

        // Menampilkan pesan sambutan
        echo "<br><br>";
        echo "Kata kata " . $nama . " hari ini adalah";
        echo "<h2>" . $kata . "</h2>";
    }

    ?>

</body>

</html>