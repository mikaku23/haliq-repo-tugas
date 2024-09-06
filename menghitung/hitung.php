<!DOCTYPE html>
<html>
<head>
    <title>Menghitung Luas Segitiga</title>
</head>
<body>

    <h2>Menghitung Luas Segitiga</h2>

    <form method="post" action="">
        <label for="alas">Alas (cm): </label>
        <input type="text" name="alas" id="alas" required><br><br>

        <label for="tinggi">Tinggi (cm): </label>
        <input type="text" name="tinggi" id="tinggi" required><br><br>

        <input type="submit" name="submit" value="Hitung">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Mendapatkan nilai dari form
        $alas = $_POST['alas'];
        $tinggi = $_POST['tinggi'];

        // Menghitung luas segitiga
        $luas = 0.5 * $alas * $tinggi;

        echo "<h3>Hasil:</h3>";
        echo "Alas: " . $alas . " cm<br>";
        echo "Tinggi: " . $tinggi . " cm<br>";
        echo "Luas Segitiga: " . $luas . " cm²<br>";
    }
    ?>

</body>
</html>