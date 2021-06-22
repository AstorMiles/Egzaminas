<?php
$connect = mysqli_connect('localhost', 'root', '', 'mokymai');
if (!$connect) {
    die('Error connect to DataBase');
}
