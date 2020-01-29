<?php
$query = mysqli_query($link, "insert into catalog (id,name,info,price,image) values (NULL,'" . $_POST["name"] . "','" . $_POST["info"] . "','" . $_POST["price"] . "','" . $_POST["image"] . "');");
