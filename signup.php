<?php 
require("./layout/db.php");

$name = $_POST["name"];
$password = $_POST["password"];
$mobile = $_POST["mobile"];

$sql = "INSERT INTO user(name,password,mobile) VALUES('$name','$password','$mobile');";

try {
    $conn->query($sql);
    header("Location:/?msg=Account Created Successfully!");
    die();
} catch (Exception $e) {
    header("Location:/?err=Something Went Wrong!");
    die();
}

?>