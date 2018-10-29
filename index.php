
<?php
require_once(__DIR__.'/config/config.php');
require_once(__DIR__.'/config/functions.php');
require_once(__DIR__.'/partials/header.php');

$pageTitle = 'Liste des films';

echo '<div id="main" class="container col-10">'; // End in footer.php
echo '<h1>'.$pageTitle.'</h1>';

// Récupérer les films

?>

<?php require_once(__DIR__.'/partials/footer.php'); ?>