<?php

require_once(__DIR__.'/config/functions.php');
require_once(__DIR__.'/config/database.php');

$query = $db->query('SELECT * FROM category');
$result = $query->fetchAll();

echo '<pre>';
foreach ( $result as $category ) {
    echo $category['name']."\n";
}
echo '</pre>';