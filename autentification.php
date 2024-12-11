<?php
    require_once('config/config.php');
    error_reporting(0);
    $password = $_POST['password'];
    $login = $_POST['login'];
    $query = "SELECT * FROM `UserRegAut` WHERE `userName` = ? AND `userPassword` = ?";
    if(isset($_POST['login'],$_POST['password']))
    {
        $stmt = $conn ->prepare($query);
        $stmt -> execute([$login, $password]);
        $result = $stmt->get_result();
        $row = $result->fetch_assoc();
    }
    if($result ->num_rows > 0)
    {
        header('location: /');
    }
    else{
        echo 'Всё * давай по новой';
    }
    // $result = $conn -> query($query);
    // $row = $result -> fetch_all(MYSQLI_ASSOC);
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="autentification.php" method="POST">
        <label for="login">Введите логин:</label>
        <input type="text" name="login">
        <br>
        <label for="password">Введите пароль:</label>
        <input type="password" name="password">
        <br>
        <input type="submit" name="button" value="Отправить">
        <br>
        <a href="index.php">Вернуться</a>
    </form>
</body>
</html>