<?php

session_start();
$_SESSION['active'] = true;
$_SESSION['USERNAME'] = $_POST['username'];
// Une boucle avec interpolation ça peut être cool :)
header('Location: '.$_POST['lastpage']);

?>