<?php
$query = mysqli_query($link, "select * from users where login = '" . $login . "' and pass = '" . md5($pass) . "';");
