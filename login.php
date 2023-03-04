<?php
session_start();
if ($_POST["email"]=="admin@gmail.com") {
    if ($_POST["password"]=="admin") {
        $_SESSION["lock"] = "xiny9387tdpq##*&B98oyo8B@*O&^PB^B$";
        header("Location: /home.php");
        die();
    } else {
        header("Location: /?err=username or password is incorrect!");
        die();
    }
} else {
    header("Location: /?err=username or password is incorrect!");
    die();
}


?>