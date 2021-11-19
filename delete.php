<?php
if($_SERVER["REQUEST_METHOD"]=="POST") {
    $conn = new PDO("mysql:host=localhost;dbname=local.pu911.com", "root", "");
    $sql = "DELETE FROM `news` WHERE `news`.`Id` = ?";
    $conn->prepare($sql)->execute([$_POST['id']]);
    echo "id = ".$_POST['id'];
}
?>