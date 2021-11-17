<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <title>Новини</title>
</head>
<body>

<?php
    $contact='Контакти';
    $t="Ivan";
    $t=56;
?>

<?php include "navbar.php"; ?>

<div class="container">
    <h1>Новини</h1>

    <a href="/create.php" class="btn btn-success">Додоати новину</a>
    <table class="table table-striped">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Назва</th>
            <th scope="col">Опис</th>
            <th scope="col">Фото</th>
        </tr>
        </thead>
        <tbody>
        <?php
            $conn = new PDO("mysql:host=localhost;dbname=local.pu911.com", "root", "");
            $reader = $conn->query("SELECT * FROM news");
            foreach ($reader as $row) {
                echo "
                <tr>
                    <td>{$row['id']}</td>
                    <td>{$row['name']}</td>
                    <td>{$row['description']}</td>
                    <td>
                        <img src='/images/{$row['image']}' alt='манул' width='100' />
                    </td>
                </tr>
                ";
            }
        ?>

        </tbody>
    </table>


</div>
<script src="/js/bootstrap.bundle.min.js"></script>
</body>
</html>