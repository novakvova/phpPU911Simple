<?php
if($_SERVER["REQUEST_METHOD"]=="POST")
{
//    echo "<h3>{$_POST['name']}</h3>";
//    echo "<h3>{$_POST['image']}</h3>";
//    echo "<h3>{$_POST['description']}</h3>";

    $filename = uniqid().'.jpg';
    $filesavepath=$_SERVER['DOCUMENT_ROOT'].'/images/'.$filename;
    move_uploaded_file($_FILES['image']['tmp_name'],$filesavepath);

    include "connection_database.php";
    $sql = "INSERT INTO `news` (`name`, `image`, `description`) VALUES (?, ?, ?);";
    $name=$_POST['name'];
    $description=$_POST['description'];
    $conn->prepare($sql)->execute([$name,$filename,$description]);
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
                <form method="post" enctype="multipart/form-data">
                    <div class="mb-3">
                        <label for="name" class="form-label">Name</label>
                        <input name="name" id="name" type="text" class="form-control" />
                    </div>
                    <div class="mb-3">
                        <label for="image" class="form-label">
                            <img src="https://www.pngall.com/wp-content/uploads/2/Upload-Transparent.png"
                                width="150"
                                 id="img_preview"
                                style="cursor: pointer"
                            />
                        </label>
                        <input type="file" name="image" id="image" class="form-control d-none" />
                    </div>
                    <div class="mb-3">
                        <label for="description" class="form-label">Опис</label>
                        <textarea type="text" name="description" id="description" rows="10" cols="45" class="form-control"></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary mb-3">Add new</button>
                </form>
            </div>
        </div>
    </div>
</div>
<script src="/js/bootstrap.bundle.min.js"></script>
<script>
    window.addEventListener('load',function() {
       const file = document.getElementById('image');
       file.addEventListener("change", function(e) {
           const uploadFile = e.currentTarget.files[0];
           document.getElementById("img_preview").src=URL.createObjectURL(uploadFile);
       });
    });
</script>
</body>
</html>