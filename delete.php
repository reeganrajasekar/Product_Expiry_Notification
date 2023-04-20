<?php
require("./layout/db.php");

$id =$_POST['id'];

$sql = "DELETE FROM product WHERE id='$id'";

if ($conn->query($sql) === TRUE) {
    header("Location: /product.php?page=1&msg=Product Deleted Successfully !");
    die();
} else {
    header("Location: /product.php?page=1&err=Something went Wrong!");
    die();
}


?>