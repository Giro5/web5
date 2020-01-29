<?php
$query = mysqli_query($link, "select * from users where login = " . $login . " and pass = " . $pass . ";");
