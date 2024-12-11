<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="reg.php" method="POST">
        <label for="login">Придумайте логин:</label>
        <input type="text" name="login">
        <br>
        <label for="password">Придумайте пароль:</label>
        <input type="password" name="password">
        <br>
        <input type="submit">
        <br>
        <a href="index.php">Вернуться</a>
        <style>
            body{
                display: flex;
                flex-flow: row nowrap;
            }
            form{
                /* background-color: blue; */
                width: 165px;
                height: 105px;
            }
            .desc{
                background-color: #e8ba5d;
                border-radius: 30px;
                border: 1px solid #a3822f;
                width: 380px;
                height: 70px;
                padding: 10px;
                margin: 25px 0 0 0;
            }
        </style>
    </form>
    <div class="desc">
            <p>Используйте верхний и нижний регистры и цифры, <br> не более 16-ти символов логин и  не более 10-ти пароль</p>
        </div>
</body>
</html>
<?php
    require_once('config/config.php');
    error_reporting(0);
    $login = $_POST['login'];
    $password = $_POST['password'];
    $query = "INSERT INTO `UserRegAut` (`userName`,`userPassword`) VALUES(?,?)";
    $stmt = $conn -> prepare($query);
    $stmt -> execute([$login, $password]);
?>
