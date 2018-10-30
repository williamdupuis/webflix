<?php

session_start();
// Une boucle avec interpolation, ça peut être cool :)
$_SESSION['active'] = true;
$_SESSION['USERNAME'] = $_POST['username'];

header('Location: '.$_POST['lastpage']);

?>