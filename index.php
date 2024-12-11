<?php
    // CRUD: C- create, R - read, U - Update, D - delete;
    require_once('config/config.php');
    $query = "SELECT * FROM items";

    // процедурный стайль
    // $result = mysqli_query($conn,$query);
    // $row = mysqli_fetch_all($result,MYSQLI_ASSOC);

    // Объектный стиль ООП
    // $result = $conn -> query($query);
    // $row = $result -> fetch_all(MYSQLI_ASSOC);

    // Стиль ПДО
    $stmt = $pdo -> query($query);
    $users = $stmt->fetchAll(PDO::FETCH_ASSOC);
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
    <table>
        <tr>
            <th>Id</th>
            <th>Title</th>
            <th>Description</th>
            <th>Cost</th>
            <th colspan="3">Manage elements</th>
        </tr>
        <!-- <tr> -->
        <!-- <?php
            // foreach($row as $item)
            // {
                ?>
                // наше решение
                // echo '<td>' . $item['id'] . '</td>';
                // echo '<td>' . $item['title'] . '</td>';
                // echo '<td>' . $item['description'] . '</td>';
                // echo '<td>' . $item['cost'] . '</td></tr>' ;

                // не наше решение
                // echo "
                //     <td>$item[id]</td>
                //     <td>$item[title]</td>
                //     <td>$item[description]</td>
                //     <td>$item[cost]</td>
                // </tr>";
                <?php
            // }
        ?> -->
         <?php
            foreach($row as $item) 
            {
                ?>
                    <tr>
                        <td><?= $item['id'] ?></td>
                        <td><?= $item['title'] ?></td>
                        <td><?= $item['description'] ?></td>
                        <td><?= $item['cost'] ?></td>
                        <td><a href="updatepage.php?id=<?= $item['id'] ?>">Update</a></td>
                        <td><a href="func/delete.php?id=<?= $item['id'] ?>">Delete</a></td>
                        <td><a href="view.php?id=<?= $item['id'] ?>">View</a></td>
                    </tr> 
                <?php
            }
        ?>
    </table>
    <form action="func/create.php" method="POST">
            <p>Title</p>
            <input type="text" name="title">
            <p>Description</p>
            <input type="text" name="description">
            <p>Cost</p>
            <input type="text" name="cost">
            <br>
            <input type="submit" value="Create" class="button">
            <br>
            <a href="autentification.php">Войти</a>
            <br>
            <a href="reg.php">Зарегистрироваться</a>
    </form>
</body>
<style>
    *
    {
        font-family: "New Rocker", system-ui;
        text-decoration: none;
    }
    tr,th{
        padding: 10px;
        border-radius: 20px;
        border: 1px solid #cdeb7a;
    }
    th{
        background-color: gray;
        color: #99f0cc;
    }
    td{
        text-align: center;
        border-radius: 20px;
        background-color: #e8e580;
        border: 1px solid #8da352;
        color: #b8256c;
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
</html>