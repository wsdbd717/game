<?php
// Change this to your own configuration
$link = new mysqli('localhost','用户名','密码','数据库名');
mysqli_set_charset($link, 'utf8');
if ($link->connect_error) {
    die("Failed to connect: " . $conn->connect_error);
}
$ranking = "kano_rank";