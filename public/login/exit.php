<?php
session_start();
$_SESSION["login"] = "";
$_SESSION["auth"] = false;
header("location: /");
