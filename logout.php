<?php

session_start();
unset($_SESSION['active']);
header('Location: '.$_POST['lastpage']);

?>