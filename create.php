<?php
if($_SERVER["REQUEST_METHOD"]=="POST")
{
//    echo "<h3>{$_POST['name']}</h3>";
//    echo "<h3>{$_POST['image']}</h3>";
//    echo "<h3>{$_POST['description']}</h3>";
    $conn = new PDO("mysql:host=localhost;dbname=local.pu911.com", "root", "");
    $sql = "INSERT INTO `news` (`name`, `image`, `description`) VALUES (?, ?, ?);";
    $name=$_POST['name'];
    $image = $_POST['image'];
    $description=$_POST['description'];
    $conn->prepare($sql)->execute([$name,$image,$description]);
    header("Location: /");
    exit();
}
?>

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
    <div class="container text-color-purple">
        <div class="row">
            <div class="col my-2">
                <h2>Додати новину</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-8">
                <form method="post">
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input name="name" id="name" type="text" class="form-control" />
                    </div>
                    <div class="form-group">
                        <label for="image">Фото</label>
                        <input type="text" name="image" id="image" class="form-control" />
                    </div>
                    <div class="form-group">
                        <label for="description">Опис</label>
                        <textarea type="text" name="description" id="description" rows="10" cols="45" class="form-control"></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary mb-3">Add new</button>
                </form>
            </div>
        </div>
    </div>
</div>
<script src="/js/bootstrap.bundle.min.js"></script>
</body>
</html>