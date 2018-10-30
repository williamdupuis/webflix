<?php

require_once(__DIR__.'/config/functions.php');
require_once(__DIR__.'/config/database.php');

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


var_dump(build_options_categories());


echo '</pre>';