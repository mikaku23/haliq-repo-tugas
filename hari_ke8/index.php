<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>method</title>
</head>
<body>
    <style>
        .link{
            text-decoration: none;
            color:red;
        }
        </style>
    <h1>mengirim data menggunakan method GET</h1><!-- method get terserah mau pake form action atau tidak -->
<a href="index.php?halaman=link1&nama=haliq" class="link">Link 1</a>

<hr>

<h1>mengirim data menggunakan method POST</h1> <!-- method post harus menggunakan form action -->

<form action="index.php?halaman=link2" method="post">
    <label for="nama">Nama</label><br>
    <input type="username" name="user" id="user" required></input><br>

     <label for="kelas">Kelas</label><br>
    <select id="kelas" name="kelas">
        <option value="isi"disabled selected>pilih kelas</option>
        <option value="XI RPL 1" required>XI RPL 1</option>
        <option value="XI RPL 2" required>XI RPL 2</option>
    </select><br>

    <label for="jenis">Jenis kelamin</label><br>
    <select id="jenis" name="jenis">
        <option value="isi"disabled selected>pilih jenis kelamin</option>
        <option value="laki-laki">Laki-Laki</option>
        <option value="perempuan">Perempuan</option>
    </select><br>

<label for="umur">Umur</label><br>
    <select id="umur" name="umur">
        <option value="isi"disabled selected>pilih umur</option>
        <option value="16">16</option>
        <option value="17">17</option>
        <option value="18">18</option>
        <option value="19">19</option>
    </select><br><br>

    <button type="submit">Kirim</button>

</form>
</body>
</html>