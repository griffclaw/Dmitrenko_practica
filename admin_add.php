 <?php
 session_start();
 require_once 'config.php';
 $sql = mysqli_query($link, "SELECT * FROM `uslugi`");
 $sql = mysqli_fetch_all($sql);
 error_reporting(-1);
 ?>
    <?php
        if (isset($_POST["name"])) {
            $sql = mysqli_query($link, "INSERT INTO `uslugi` ( `name`, `opisanie`) VALUES ('".$_POST['name']."', '".$_POST['opisanie']."')");
            echo "Услуга добавлена";
        }else{
            echo "Услуга не добавлена";
        }
    ?>