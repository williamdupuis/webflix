<?php

require_once(__DIR__.'/config/functions.php');
require_once(__DIR__.'/config/database.php');
require_once(__DIR__.'/config/config.php');

$query = $db->query('SELECT * FROM category');
$result = $query->fetchAll();

echo '<pre>';

// foreach ( $result as $category ) {
//     echo $category['name']."\n";
// }

// $categories = get_categories();
// var_dump($categories);
// foreach ($categories as $id => $name) {
//     echo '<option name="' . $id . '">';
//     echo $name ;
//     echo '</option>' . "\n";
// }

echo $_SERVER['SCRIPT_FILENAME'] . "\n";
echo $_SERVER['DOCUMENT_ROOT'] . "\n";
echo $DOCUMENT_ROOT;

var_dump($_SERVER);

echo '</pre>';