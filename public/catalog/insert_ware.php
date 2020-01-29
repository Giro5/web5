<?php
include "../../private/connect.php";
include "../../private/insert_tovar.php";
if (!$query) {
    echo mysqli_connect_error();
}
header("Location: /");
