<?php
    session_start();
    require_once 'config.php';
    $sql = mysqli_query($link, "SELECT * FROM `users`");
    $sql = mysqli_fetch_all($sql);
    $uploaddir = 'img/';
    if($_POST['submit'] = 1 and isset($_FILES['userfile']['name'])) {
        if(move_uploaded_file($_FILES['userfile']['tmp_name'], $uploaddir. $_FILES['userfile']['name'])) {
            $name = $_FILES['userfile']['name'];
            $query_ava = mysqli_query($link, "UPDATE `users` SET `ava` = '".$name."' WHERE `users`.`id` =".$_SESSION['user_id']);
        }
    }
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.css">
    <link rel="stylesheet" href="css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link href="add_vxod.php">
    <title>Личный кабинет пользователя</title>
</head>
<body>
    <header> 
        <div class="menu">
            <div class="sec1 container d-flex h-100 p-4 text-center mx-auto flex-column">
                <div class="mb-auto">
                    <a href="index.php"><h3 class="float-md-start mb-0">IRBIS</h3></a>
                    <nav class="nav nav-masthead justify-content-center float-md text-white">
                        <a class="nav-link fw-bold py-1 px-0" aria-current="page" href="index.php">Главная</a>
                        <a class="nav-link fw-bold py-1 px-0" href="about.php">О заводе</a>
                        <a class="nav-link fw-bold py-1 px-0" href="uslugi.php">Услуги</a>
                        <a class="nav-link fw-bold py-1 px-0" href="contact.php">Контакты</a>
                        <p class="nav-link fw-bold py-1 px-0">8-800-511-10-44</p>
                        <p class="nav-link fw-bold py-1 px-0">+7 (47354) 6-24-22</p>
                        <p class="nav-link fw-bold py-1 px-0">info@irbis-bor.ru</p>
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <table action="add_vxod.php" class="sec1 container" style="margin-top: 100px; margin-bottom: 200px;">
        <h2 class="container" style="padding-top: 100px;">Ваши данные:</h2>
        <tr style="background: #7c7c7c;">
            <th>login</th>
            <th style="background: #949494;">name</th>
        </tr>
        <?php
            foreach($sql as $item){
                if($_SESSION['user_id'] == $item[0]){
                ?>
                    <tr style="background: #bdbdbd;">
                        <td style="background: #dbdbdb;"> <?= $item[1] ?> </td>
                        <td> <?= $item[3] ?> </td>
                      
                    </tr>
                   
                <?php
                
                }
            }
        ?>
        </table>
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