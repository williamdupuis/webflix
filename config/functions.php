<?php

require_once(__DIR__.'/database.php');



function build_body_top($title) {
    return '<div id="main" class="container col-12">
    <div class="container col-10">
    <h1>'.$title.'</h1>';
}



function get_categories() {
    global $db;
    $query = $db->query('SELECT * FROM category');
    $result = $query->fetchAll();
    $listing = [];

    foreach ( $result as $category ) {
        $listing[$category['id']] = $category['name'];
    }

    return $listing;
}

?>