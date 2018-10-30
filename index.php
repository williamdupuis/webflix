
<?php
require_once(__DIR__.'/config/config.php');
require_once(__DIR__.'/config/functions.php');
require_once(__DIR__.'/partials/header.php');

$pageTitle = 'Liste des films';
echo build_body_top($pageTitle);


// Get movies

// Debug
    echo '<div style="background-color: #fff;">';
    var_dump($_SESSION);
    echo '</div>';
?>



<?php
require_once(__DIR__.'/partials/footer.php');
?>