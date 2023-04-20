<?php
setcookie("id", "", time() - 3600);
setcookie("name", "", time() - 3600);
header("Location: /");
die();
?>