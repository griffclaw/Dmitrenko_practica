<?php
    session_start();
    require_once 'config.php';

    error_reporting(5);
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
    <link rel="icon" sizes="32x32" href="img/logo.png">
    <title>HappyBox</title>
</head>
<body>
    <div class="container d-flex w-100 h-100 p-4 text-center mx-auto flex-column">
        <a href="index.php"><img src="img/logo.jpg" class="img-1 text-center mx-auto flex-column" alt="#"></a>
    </div>
    <div class="menu">
        <div class="container d-flex w-100 h-100 p-4 text-center mx-auto flex-column">
            <header class="mb-auto" >
                <a href="index.php"><h3 class="float-md-start mb-0 text-white">IRBIS</h3></a>
                <nav class="nav nav-masthead justify-content-center float-md-end text-white">
                    <a class="nav-link fw-bold py-1 px-0" aria-current="page" href="index.php">Главная</a>
                    <a class="nav-link fw-bold py-1 px-0" href="about.php">О заводе</a>
                    <a class="nav-link fw-bold py-1 px-0" href="uslugi.php">Услуги</a>
                    <a class="nav-link fw-bold py-1 px-0 active" href="contact.php">Контакты</a>
                    <p class="nav-link fw-bold py-1 px-0">8-800-511-10-44</p>
                    <p class="nav-link fw-bold py-1 px-0">+7 (47354) 6-24-22</p>
                    <p class="nav-link fw-bold py-1 px-0">info@irbis-bor.ru</p>
                </nav>
            </header>
        </div>
    </div>
    <!-- sec2 -->
        <div class="container d-flex mx-auto flex-column">
            <div class="sec1">
                <div class="px-1">
                    <h1 class="text-black">Контактная информация</h1>
                    <p class="lead"><b>АО «Ирбис»</b> <br> Адрес производства: 397160, Воронежская обл., г. Борисоглебск, ул. Советская, 32, оф. 12</p>
                </div>
                <div class="px-1 py-1">
                    <br>
                    <p class="lead"><b>8-800-511-10-44</b> <br> (звонок по территории России бесплатный) <br> +7 (495) 134-74-48 <br> info@irbis-bor.ru</p>
                    <p class="lead"><b>Отдел продаж:</b> <br> +7(47354)6-24-22 <br> +7(47354)6-02-09 <br>  +7(47354)6-44-96 <br>  reg1@irbis-bor.ru <br>  reg2@irbis-bor.ru</p>
                    <p class="lead"><b>Приемная ген. директора:</b> <br>  +7(47354)6-31-35</p>
                    <p class="lead"><b>Отдел снабжения:</b> <br>   +7(47354)5-11-25 (доб. 2001) <br>  snab@irbis-bor.ru</p>
                    <p class="lead"><b>Отдел ОТК:</b> <br>  +7(47354)6-30-25 <br> otk@irbis-bor.ru</p>
                </div>
                <div class="px-1">
                    <p class="lead">Производство продукции и обработка заказов осуществляется в г. Борисоглебск.</p>
                    <p class="lead">Для вашего удобства ниже размещены адреса пунктов выдачи транспортной компании ПЭК. Указанные номера телефонов являются региональными телефонами АО «Ирбис».</p>
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
                        <a class="nav-link fw-bold py-1 px-0" href="uslugi.php">Услуги</a>
                        <a class="nav-link fw-bold py-1 px-0 active" href="contact.php">Контакты</a>
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