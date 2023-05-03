<?php
    session_start();
    require_once 'config.php';
    error_reporting(-1);
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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    <link href="add_vxod.php">
    <title>Админ</title>
</head>
<body>
    <header> 
        <div class="menu">
            <div class="container d-flex h-100 p-4 text-center mx-auto flex-column">
                <header class="mb-auto">
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
                </header>
            </div>
        </div>
    </header>

       <div class="container text-center sec1 d-flex">    
         <form action="admin.php" method = "POST">
            <h3>Изменение услуг</h3>
            <input type="text" name="id_t" class="input w-25" placeholder="введите id услуги"><br> <br>
            <h3>Выберете что хотите изменить</h3>
            <select name="zamena">
                <option value="id_t">id услуги</option>
                <option value="name">Название</option>
                <option value="opisanie">Описание</option>
            </select> <br> <br>
            <textarea name="update" cols="40" rows="5" placeholder="Напишите текст"></textarea> <br> <br>
            <a href="admin.php"><input type="submit" value="Изменить" class="btn" style="background: #ff5319; color: white"> <br></a>
            </form> <br>
            <?php
                if(isset($_POST['zamena']))
                {
                $id=$_POST['id_t'];
                $field=$_POST['zamena'];
                $update=$_POST['update'];
                mysqli_query($link, "UPDATE `uslugi` SET `".$field."`= '".$update."' WHERE `id_t` = '".$id."'");
                echo "Товар обновлен";
                }
            ?>

            <form action="admin_add.php" method = "POST">
                <h3>Добавление услуг</h3>
                <input type="text" name="name" class="input" required placeholder="введите Название услуги"><br> <br>
                <input type="text" name="opisanie" class="input" required placeholder="введите Описание услуги"><br> <br>
                <input type="submit" name="submit" value="Добавить" class="btn" style="background: #ff5319; color: white"> <br>
            </form> <br>
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