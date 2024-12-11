<?php
    $localhost = 'localhost';
    $user = 'root';
    $password = '';
    $dbname = 'Shop';
    // $conn = mysqli_connect($localhost,$user,$password,$dbname);
    // if(mysqli_error($conn))
    // {
    //     die(Не подключено);
    // }
    // else
    // {
    //     echo "Подключено";
    // }
    // $conn = new mysqli($localhost, $user, $password, $dbname);
    // if ($conn->connect_error) {
    //     die("Не подключено". $conn->connect_error);
    // }
    // else{
    //     echo "Подключено";
    // }

    
    try{
        $pdo = new PDO("msql:host=$localhost;dbname=$dbname",$user,$password);
    }
    catch (PDOException $execiption)
    {
        echo "Ошибка подключения" . $execiption -> getMessage();
    }
?>