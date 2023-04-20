<?php
require("./layout/db.php");
function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

$name = test_input($_POST['name']);
$stock = test_input($_POST['stock']);
$expiry = test_input($_POST['expiry']);
$userid=$_COOKIE["id"];

$sql = "INSERT INTO product (name,stock,expiry,userid)
VALUES ('$name','$stock','$expiry','$userid')";

if ($conn->query($sql) === TRUE) {
    header("Location: /product.php?page=1&msg=Product Added Successfully !");
    die();
} else {
    header("Location: /product.php?page=1&err=Something went Wrong!");
    die();
}


?>