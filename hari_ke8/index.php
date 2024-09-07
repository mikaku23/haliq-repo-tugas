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
<a href="link1.php?nama=haliq" class="link">Link 1</a>

<hr>

<h1>mengirim data menggunakan method POST</h1> <!-- method post harus menggunakan form action -->

<form action="link2.php" method="post">

    <input type="text" name="kelas" id="kelas"><br><br>
    <button type="submit">kirim</button>
</form>
</body>
</html>