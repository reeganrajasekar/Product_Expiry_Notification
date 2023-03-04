<?php 
require("./db.php");

// 
$sql = "CREATE TABLE product (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(500) NOT NULL,
    rate VARCHAR(500) NOT NULL,
    stock VARCHAR(500) NOT NULL,
    expiry DATE NOT NULL,
    reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
)";

if ($conn->query($sql) === TRUE) {
    echo "Table product created successfully<br>";
} else {
    echo "Error creating table: ";
}


?>