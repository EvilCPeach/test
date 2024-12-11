<?php
    require_once('../config/config.php');
    $itemId = $_GET['id'];
    $query = "DELETE FROM items WHERE `items`.`id` = ?";
    $stmt = $conn -> prepare($query);
    $stmt -> execute([$itemId]);
    // mysqli_query($conn, $query);
    // $conn -> query($query);
    header("location: /");
?>
