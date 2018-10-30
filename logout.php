<?php

require_once(__DIR__.'/config/config.php');

session_start();
unset($_SESSION['active']);
header('Location: '.$DOCUMENT_ROOT);

?>