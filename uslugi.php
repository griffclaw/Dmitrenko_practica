<?php
    session_start();
    require_once 'config.php';
    $sql = mysqli_query($link, "SELECT * FROM `otz`");
    $sql = mysqli_fetch_all($sql);
    
?>

<!DOCTYPE html>
<html lang="ru" class="h-100">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/slid.css">
    <link rel="icon" sizes="32x32" href="img/logo.jpg">
    <title>IRBIS</title>
</head>
<body>
        <div class="container d-flex w-100 h-100 p-4 text-center mx-auto flex-column">
            <a href="index.php"><img src="img/logo.jpg" class="img-1 text-center mx-auto flex-column" alt="#"></a>
        </div>
    <div class="menu">
        <div class="container d-flex w-100 h-100 p-4 text-center mx-auto flex-column">
            <header class="mb-auto" >
                <a href="index.php"><h3 class="float-md-start mb-0 text-white">IRBIS</h3></a>
                <nav class="nav nav-masthead justify-content-center float-md text-white">
                    <a class="nav-link fw-bold py-1 px-0" aria-current="page" href="index.php">Главная</a>
                    <a class="nav-link fw-bold py-1 px-0" href="about.php">О заводе</a>
                    <a class="nav-link fw-bold py-1 px-0 active" href="uslugi.php">Услуги</a>
                    <a class="nav-link fw-bold py-1 px-0" href="contact.php">Контакты</a>
                    <p class="nav-link fw-bold py-1 px-0">8-800-511-10-44</p>
                    <p class="nav-link fw-bold py-1 px-0">+7 (47354) 6-24-22</p>
                    <p class="nav-link fw-bold py-1 px-0">info@irbis-bor.ru</p>
                </nav>
            </header>
        </div>
    </div>
    <!-- sec4 -->
    <div class="container d-flex w-100 h-100 mx-auto flex-column">
        <div class="h-100 sec1">
            <h1 class="d-flex px-1">Услуги</h1>
            <div class="d-flex">
                <?php
                $sql = mysqli_query($link, "SELECT* FROM `uslugi`");
                while ($result = mysqli_fetch_array($sql)) {
                    echo "
                    <div id='carouselExampleControls' class='carousel slide' data-bs-ride='carousel'>
                        <div class='carousel-inner d-flex flex-column'>
                            <div class='carousel-item active d-flex'>
                                <div class='card' style='width: 18rem; height:30rem;'>
                                    <img src=img/{$result['foto']} class='card-img-top' alt='#'>
                                    <div class='card-body text-center'>
                                        <h5 class='card-title'>{$result['name']} </h5>
                                        <h5 class='card-title text-primary'><a href=\"uslug.php?id=".$result['id_uslug']."\" class='btn text-white' style='background: #ff5319; color:white; border:none;'>Подробнее</a></h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                        ";
                    }        
                ?>
            </div>    
        </div>
    </div>
        <!-- footer -->
        <footer class="footer">
        <div class="container d-flex w-65 h-100 mx-auto">
                <div class="px-1 block">
                    <nav class="container nav nav-mastfoot flex-column float-md-start mb-0">
                        <a class="nav-link fw-bold py-1 px-0" href="index.php">Главная</a>
                        <a class="nav-link fw-bold py-1 px-0" href="about.php">О заводе</a>
                        <a class="nav-link fw-bold py-1 px-0 active" href="uslugi.php">Услуги</a>
                        <a class="nav-link fw-bold py-1 px-0" href="contact.php">Контакты</a>
                    </nav>
                </div>
            <div class="h-f text-center text-black-50 justify-content-center">
                <a href="index.php"><h3 class="text-center text-white">IRBIS</h3></a>
                <h5 class="t-f mt-auto text-white">Политика конфиденциальности <br> All Rights Reserved.</h5>
            </div>
        </div>
    </footer>

</body>
</html>