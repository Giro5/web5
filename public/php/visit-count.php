<?php
$msg = "";

include "../../private/connect.php";

if (!$link) {
    $msg = "Не удалось подключиться к базе";
    echo ("<script>console.log('" . mysqli_connect_errno() . " " . mysqli_connect_error() . "');</script>");
}

$query = mysqli_query($link, "insert into counter (id,info) values (NULL,'" . $_SERVER["HTTP_USER_AGENT"] . " " . $_SERVER["REMOTE_ADDR"] . "');");
if (!$query) {
    echo ("<script>console.log('" . mysqli_connect_errno() . " " . mysqli_connect_error() . "');</script>");
}

$query = mysqli_query($link, "select * from counter;");
if (!$query) {
    $msg = "Не удалось получить данные";
    echo ("<script>console.log('" . mysqli_connect_errno() . " " . mysqli_connect_error() . "');</script>");
} else {
    echo $query->num_rows;
}
