<?php
require "connect.php";

$ID = $_GET['ID'];
$name = $_GET['name'];
$newRating = $_GET['rating'];

$changeRating = mysqli_query($connect, "UPDATE kursai SET Reitingas = '$newRating' WHERE kurso_pavadinimas = '$ID' AND autorius = '$name'");

if ($changeRating) {

    header('Location:' . $_SERVER['HTTP_REFERER']);
} else {
    echo mysqli_error($connect);
}
?>