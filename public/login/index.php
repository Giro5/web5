<?php
var_dump($_POST);
echo "<br><br>";
$login = $_POST["login"];
$pass = $_POST["password"];
include "../../private/connect.php";
include "../../private/check_login.php";
