<?php
$query = mysqli_query($link, "insert into counter (id,info) values (NULL,'" . date("Y-m-d H:i:s T") . " " . $_SERVER["REMOTE_ADDR"] . "');");
