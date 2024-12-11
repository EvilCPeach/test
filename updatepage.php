<?php
    require_once('config/config.php');
    $itemId = $_GET['id'];
    // $query = "SELECT * FROM `items` WHERE `id` = '$itemId'";
    // $result = mysqli_query($conn,$query);
    // $row = mysqli_fetch_assoc($result);
    // $result = $conn -> query($query);
    // $row = $result -> fetch_assoc();

    // Подготовленный запрос
    $query = "SELECT * FROM `items` WHERE `id` = ?";
    $stmt = $conn -> prepare($query);
    // $stmt -> bind_param("a",$itemId);
    $stmt -> execute([$itemId]);

    // получение данных
    $result = $stmt -> get_result();
    $row = $result -> fetch_assoc();
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
    <form action="func/update.php" method="POST">
            <input type="hidden" name="id" value="<?= $row['id'] ?>">
            <p>Title</p>
            <input type="text" name="title" value="<?= $row['title'] ?>">
            <p>Description</p>
            <input type="text" name="description" value="<?= $row['description'] ?>">
            <p>Cost</p>
            <input type="text" name="cost" value="<?= $row['cost'] ?>">
            <br>
            <input type="submit" value="Update" class="button">
    </form>
    <style>
    *
    {
        font-family: "New Rocker", system-ui;
    }
    p{
        color:#34d1a2;
    }
    input{
        border-radius: 10px;
        transition-duration: 0.4s;
        border: 2px solid gray;
        color:#34d1a2;
    }
    .button{
        width: 250px;
        height: 50px;
        color: #b8256c;
        margin: 30px 0 0 0;
        background-color: #cdeb7a;
        border: 3px solid #8da352;
        border-radius: 10px;
        transition-duration: 1s;
    }
    .button:hover{
        background-color: #b8256c;
        color: #cdeb7a;
        border-radius: 30px;
    }
    input[type=text]:focus{
        outline: 4px solid #8da352;
        border: none;
    }
</style>
</body>
</html>