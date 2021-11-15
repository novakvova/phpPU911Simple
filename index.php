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
    <h1>Hello PHP Apache</h1>
    <?php
        echo "<h2>Hello php $t</h2>";
        if($t===56) {
            echo "<h3>t = $t</h3>";
        }
        echo '<h4> $t = '.$t.'</h4>';
    ?>
</div>
<script src="/js/bootstrap.bundle.min.js"></script>
</body>
</html>