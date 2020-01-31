<?php
session_start();
$login = $_POST["login"];
$pass = $_POST["password"];
include "../../private/connect.php";
include "../../private/check_login.php";
if ($query->num_rows == 1) {
    $_SESSION["login"] = $_POST["login"];
    $_SESSION["auth"] = true;
}
header("Location: /");
