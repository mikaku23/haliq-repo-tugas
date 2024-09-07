<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Tugas harian</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
<style>
    body{
        background: linear-gradient(to right, black, rgb(21, 21, 48), rgb(164, 164, 240));
        color:white;
    }
    .row{
        position: sticky;
        top: 0;
    }
    nav{
        background: #00000052;
        backdrop-filter:blur(30px);
    }
    .nav-item{
        display: flex;
        justify-content: center; 
        align-items: center; 
        padding: 5px 30px;
        padding-left:55px;
    }
    .nav-link{
        transition: transform 0.3s ease;
    }
    .nav-link:hover{
        color:white;
        transform: scale(1.2);
    }
.nav ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    display: flex;
    justify-content: space-around;
}

.nav ul li {
    display: inline;
}

.nav ul li a {
    text-decoration: none;
    padding: 10px 20px;
    display: block;
    position: relative;
}

.nav ul li a::after {
    content: '';
    position: absolute;
    left: 50%;
    bottom: 0;
    width: 0;
    height: 2px;
    background-color: #fff;
    transition: all 0.3s ease;
    transform: translateX(-50%);
}

.nav ul li a:hover::after,
.nav ul li a.active::after {
    width: 100%;
    transform: translateX(-50%) scaleX(1);
}
</style>

        <div class="row">
            <div class="col-lg-12">
                <nav class="navbar navbar-expand-lg" data-bs-theme="dark">
                    <div class="nav">
                    <div class="container-fluid">
                        
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        
                        <div class="collapse navbar-collapse" id="navbarNav">
                            <ul class="navbar-nav">
                                <li class="nav-item">
                                    <a class="nav-link" href="index.php?halaman=welcome">Home</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="index.php?halaman=hari1">hari 1</a>
                                </li>
                                 <li class="nav-item">
                                    <a class="nav-link" href="index.php?halaman=hari2">hari 2</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="index.php?halaman=hari3">hari 3</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="index.php?halaman=hari4">hari 4</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="index.php?halaman=hari5">hari 5</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="index.php?halaman=hari6">hari 6</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="index.php?halaman=hari7">hari 7</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="index.php?halaman=hari8">hari 8</a>
                                </li>
                    
                                
                            </ul>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
</div>
    <?php 
    
        if(isset($_GET['halaman'])){
            switch ($_GET['halaman']){
                case "welcome":
                    include "welcome.php";
                    break;
                case "hari1":
                    include "hari_pertama/index.php";
                    break;
                case "hari2":
                    include "hari_kedua/index.php";
                    break;
                case "hari3":
                    include "hari_ketiga/index.php";
                    break;
                case "hari4":
                    include "hari_keempat/IMT.php";
                    include "hari_keempat/index.php";
                    include "hari_keempat/modulus.php";
                    include "hari_keempat/nilai.php";
                    break;
                case "hari5":
                    include "hari_kelima/index.php";
                    include "hari_kelima/kabisat.php";
                    break;
                case "hari6":
                    include "hari_ke6/index.php";
                    break;
                case "hari7":
                    include "hari_ke7/index.php";
                    include "hari_ke7/kabisat.php";
                    include "hari_ke7/prima.php";
                    include "hari_ke7/ulang-ulang.php";
                    include "hari_ke7/ulang.php";
                    break;
                case "hari8":
                    include "hari_ke8/index.php";
                    break;
                case "link1":
                    include "hari_ke8/link1.php";
                    break;
                case "link2":
                    include "hari_ke8/link2.php";
                    break;
                default:
                    include "welcome.php";
            }
        }else{
            include "welcome.php";
        }
    ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>