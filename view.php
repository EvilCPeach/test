<?php
    require_once('config/config.php');
    $itemId = $_GET['id'];
    $query = "SELECT * FROM `items` WHERE `id` = ?";
    $stmt = $conn ->prepare($query);
    $stmt -> execute([$itemId]);
    $result = $stmt->get_result();
    $row = $result->fetch_assoc();
    // $result = mysqli_query($conn,$query);
    // $row = mysqli_fetch_assoc($result);
    // var_dump($result);
    // $result = $conn -> query($query);
    // $row = $result -> fetch_assoc();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=New+Rocker&display=swap" rel="stylesheet">
</head>
<body>
    <h2>Title</h2>
    <p><?= $row['title'] ?></p>
    <h2>Description</h2>
    <p><?= $row['description'] ?></p>
    <h2>Cost</h2>
    <p><?= $row['cost'] ?></p>
    <br>
    <a href="index.php">Back</a>
    <style>
    *
    {
        font-family: "New Rocker", system-ui;
        text-decoration: none;
    }
    p{
        color:#34d1a2;
    }
    a{
        display: block;
        text-align: center;
        width: 200px;
        line-height: 40px;
        height: 40px;
        background-color: #b8256c;
        border: 3px solid #7a1c60;
        border-radius: 15px;
    }
</style>
</body>
</html>