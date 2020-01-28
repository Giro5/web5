<?php
include "../../private/connect.php";

if (!$link) {
    echo "<em>Не удалось подключиться к базе</em>";
    echo ("<script>console.log('" . mysqli_connect_errno() . " " . mysqli_connect_error() . "');</script>");
}

include "../../private/insert.php";
if (!$query) {
    echo ("<script>console.log('" . mysqli_connect_errno() . " " . mysqli_connect_error() . "');</script>");
}

include "../../private/select.php";
if (!$query) {
    echo "<em>Не удалось получить данные</em>";
    echo ("<script>console.log('" . mysqli_connect_errno() . " " . mysqli_connect_error() . "');</script>");
} else {
    echo $query->fetch_row()[0];
}
