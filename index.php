<?php
    session_start();
    require_once 'config.php';
    $sql = mysqli_query($link, "SELECT * FROM `otz`");
    $sql = mysqli_fetch_all($sql);
    error_reporting(0);
    
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
                    <a class="nav-link fw-bold py-1 px-0 active" aria-current="page" href="index.php">Главная</a>
                    <a class="nav-link fw-bold py-1 px-0" href="about.php">О заводе</a>
                    <a class="nav-link fw-bold py-1 px-0" href="uslugi.php">Услуги</a>
                    <a class="nav-link fw-bold py-1 px-0" href="contact.php">Контакты</a>
                    <p class="nav-link fw-bold py-1 px-0">8-800-511-10-44</p>
                    <p class="nav-link fw-bold py-1 px-0">+7 (47354) 6-24-22</p>
                    <p class="nav-link fw-bold py-1 px-0">info@irbis-bor.ru</p>
                    <a href="vxod.php" class="btn btn-lg btn-secondary py-1 px-4 border-white bg-white btn1">Войти</a>
                </nav>
            </header>
        </div>
    </div>
    <div class="container-fluid d-flex w-100 h-100 mx-auto flex-column">
        <div class="container sec1 h-100 d-flex" style="padding-left: 10rem;">
            <div id='carouselExampleControls' class='carousel slide d-flex' data-bs-ride='carousel'>
                <div class='carousel-inner'> 
                    <div class='carousel-item active'> 
                        <img src='img/irbis-nk.png'class='tovar' alt='#'>
                    </div>
                    <div class='carousel-item'>
                        <img src=img/vyatich-new.png class='tovar' alt='#'>
                    </div> 
                    <div class='carousel-item'>
                        <img src=img/bars-2015-2022.png class='tovar' alt='#'>
                    </div>
                    <div class='carousel-item'>
                        <img src=img/kotel-hoper.png class='tovar' alt='#'>
                    </div>  
                            <button class='carousel-control-prev' type='button' data-bs-target='#carouselExampleControls'  data-bs-slide='prev'>
                                <span class='carousel-control-prev-icon' aria-hidden='true'></span>
                                <span class='visually-hidden'>Предыдущий</span>
                            </button>
                            <button class='carousel-control-next' type='button' data-bs-target='#carouselExampleControls'  data-bs-slide='next'>
                                <span class='carousel-control-next-icon' aria-hidden='true'></span>
                                <span class='visually-hidden'>Следующий</span>
                            </button>
                </div>
            </div>
        </div> 
    </div>             
        <div class="container d-flex w-100 h-100 mx-auto flex-column">
            <div class="h-100 sec1">
                <!-- <img src="img/logo.jpg" class="img-1 img-fluid" alt="#"> -->
                <main class="px-1">
                    <h1 class="text-black">Завод котельного оборудования «IRBIS»</h1>
                    <p class="lead t1">Завод котельного оборудования «IRBIS» предлагает современную отопительную технику в вашем регионе. У нас вы найдете качественное оборудование, выгодные условия поставки, гарантию от производителя, а также индивидуальные скидки.</p>
                </main>

                <div class="px-1">
                    <h1 class="text-black">Отопительные котлы «IRBIS»</h1>
                    <p class="lead t1">В ассортименте котельного завода представлено следующее оборудование: <br>
                        1. газовые напольные котлы; <br>
                        2. котлы наружного размещения; <br>
                        3. блочные котельные; <br>
                        4. широкий модельный ряд автоматики для котельных и котлов.</p>
                </div>
                    
            </div>
        </div>

    <!-- sec3 -->
    <div class="sec3">
        <div class="container d-flex w-100 h-100 mx-auto flex-column">
            <div class="d-flex h-100">
                <div class="px-1">
                    <h1 class="text-black">Не знаешь что выбрать?</h1>
                    <p class="lead text-black w-80">Оставьте телефон, и специалисты АО «Ирбис» свяжутся с вами, чтобы подобрать котел исходя из размеров отапливаемого помещения и условий эксплуатации.</p>
                    <p class="lead">
                        <a href="oplata.php" class="btn btn-lg btn-secondary py-2 px-5" data-bs-toggle="modal" data-bs-target="#exampleModal" style="background: #ff5319; color:white; border:none;">Обратный звонок</a>
                    </p>
                </div>
                <img src="img/kotel.png" class="img-1 img-fluid" alt="#">
            </div>
        </div>
    </div>
    <!-- Модальное окно -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Форма обратного звонка</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Закрыть"></button>
      </div>
      <div class="modal-body">
        <form action="index.php" method="post">
            <input type="text" name="name" class="input w-25" placeholder="Введите ФИО"> <br>
            <input type="email" name="email" class="input w-25" placeholder="Введите email"> <br>
            <textarea name="opisanie" id="" cols="23" rows="5"></textarea> <br>
            <button type="submit" class="btn btn-primary" name="btn">Отправить</button>
        </form>
       
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Закрыть</button>
      </div>
    </div>
  </div>
</div>
<?php
require_once 'config.php';
if ($_POST["btn"]) {
    //Вставляем данные, подставляя их в запрос
    $email = $_POST['email'];
    $name = $_POST['name'];
    $opisanie = $_POST['opisanie'];
        $sql = mysqli_query($link, "INSERT INTO `zvonok` ( `name`, `email`, `opisanie`) VALUES ('$name', '$email', '$opisanie')");
        echo "<h3 style = 'color: red'>Данные отправлены</h3>";
    }
    else {
    
}

?>
 

<!-- sec4 -->
    <div class="container d-flex w-100 h-100 mx-auto sec5-1 flex-column">
        <h1 class="text-center d-flex px-1">Отзывы</h1>
        <div class="h-100">
            <div class="">
                <div class="d-flex justify-content-center">
                    <?php
                        $sql = mysqli_query($link, "SELECT* FROM `otz`");
                        while ($result = mysqli_fetch_array($sql)) {
                            echo " 
                            <div class='contact float-md-start mb-0'>
                                <h2 class='text-center px-1'>{$result['name']}</h2>
                                <p class='lead'>{$result['opisanie']}</p>
                                <p class='text-center d-flex px-1'>{$result['who']}</p>
                            </div>
                            ";
                        }
                    ?>
                    
                </div>
            </div>    
        </div>
    </div>

    <!-- sec5 -->
    <div class="container d-flex w-100 h-100 mx-auto sec5-1 flex-column">
        <h1 class="text-center d-flex px-1">Контакты</h1>
        <div class="h-100 sec5">
            <div class="text-center">
                <div class="d-flex justify-content-center">
                    <div class="contact text-center float-md-start mb-0">
                        <h2 class="text-center px-1">Адрес</h2>
                        <p class="lead">Воронежская обл., <br> г. Борисоглебск, <br> ул. Советская, 32, <br> оф. 12</p>
                    </div>
                    <div class="contact">
                        <h2 class="text-center d-flex px-1">Номер телефона</h2>
                        <p class="lead">8-800-511-10-44</p>
                    </div>
                    <div class="contact float-md-end mb-0">
                        <h2 class="text-center d-flex px-1">График работы</h2>
                        <p class="lead">8:00 - 17:00 <br> Выходные: сб-вс</p>
                    </div>
                </div>
            </div>    
        </div>
    </div>

    
    
    
    <!-- footer -->
    <footer class="footer">
        <div class="container d-flex w-65 h-100 mx-auto">
                <div class="px-1 block">
                    <nav class="container nav nav-mastfoot flex-column float-md-start mb-0">
                        <a class="nav-link fw-bold py-1 px-0 active" href="index.php">Главная</a>
                        <a class="nav-link fw-bold py-1 px-0" href="about.php">О заводе</a>
                        <a class="nav-link fw-bold py-1 px-0" href="uslugi.php">Услуги</a>
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