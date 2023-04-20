<?php
require("./layout/db.php");

$mobile = $_POST["mobile"];
$password = $_POST["password"];

$sql = "SELECT * FROM user WHERE mobile='$mobile' AND password='$password'";
$result = $conn->query($sql);
if($result->num_rows>0){
    while($row = $result->fetch_assoc()){
        setcookie("id",$row["id"],time() + 2 * 24 * 60 * 60);
        setcookie("name",$row["name"],time() + 2 * 24 * 60 * 60);
        header("Location:/home.php");
        die();
    }
}else{
    header("Location:/?err=Mobile Number or Password is Wrong!");
    die();
}
?>