<?php
    require_once("../config/config.php");
    $title = $_POST['title'];
    $description = $_POST['description'];
    $cost = $_POST['cost'];
    $query = "INSERT INTO `items` (`title`,`description`,`cost`) VALUES(?,?,?)";
    $stmt = $conn -> prepare($query);
    $stmt -> execute([$title,$description,$cost]);
    // mysqli_query($conn,$query);
    // print_r($_POST);
    // $conn -> query($query);
    header('Location: /');
?>