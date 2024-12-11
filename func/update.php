<?php
    require_once("../config/config.php");
    $id = $_POST['id'];
    $title = $_POST['title'];
    $description = $_POST['description'];
    $cost = $_POST['cost'];
    $query = "UPDATE `items` SET `title`='$title',`description`='$description',`cost`='$cost' WHERE `items`.`id` = ?";
    $stmt = $conn ->prepare($query);
    $stmt -> execute([$id]);
    // mysqli_query($conn,$query);
    // print_r($_POST);
    // $conn -> query($query);
    header('Location: /');
?>