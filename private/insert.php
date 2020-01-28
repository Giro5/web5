<?php
$query = mysqli_query($link, "insert into counter (id,info) values (NULL,'" . $_SERVER["HTTP_USER_AGENT"] . " " . $_SERVER["REMOTE_ADDR"] . "');");
