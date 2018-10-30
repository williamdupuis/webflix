
<?php
require_once(__DIR__.'/config/config.php');
require_once(__DIR__.'/config/functions.php');
require_once(__DIR__.'/partials/header.php');

$pageTitle = 'Ajouter un film';
echo build_body_top($pageTitle);


// Formulaire (include?) ?>
<div class="container col-6 back-container">
    <form method="POST" enctype="multipart/form-data">
        <div class="row">
            <?php // TITRE: name=movieTitle ?>
            <div class="col mb-3">
                <label for="movieTitle">Titre</label>
                <input type="text" class="form-control" id="movieTitle" name="movieTitle" placeholder="Saisissez le titre du film" value="" required="true">
                <div class="invalid-feedback">Valid first name is required.</div>
            </div>

        </div>

        <div class="row">
            <?php // URL: name=movieUrl ?>
            <div class="col mb-3">
                <label for="movieUrl">URL</label>
                <input type="text" class="form-control" id="movieUrl" name="movieUrl" placeholder="Saisissez l'URL du film" value="">
                <div class="invalid-feedback">Valid last name is required.</div>
            </div>
        </div>

        <div class="row">
            <?php // CATEGORIE: name=movieCategory ?>
            <div class="col mb-3">
                <label for="movieCategory">Catégorie</label>
                <select class="custom-select d-block w-100" id="movieCategory" required="true">
                    <option value="">Choisissez une catégorie...</option>
                    <option>$CAT1</option>
                    <option>$CAT2</option>
                    <option>$CAT3</option>
                    <option>$CAT4</option>
                    <option>$CAT5</option>
                </select>
                <div class="invalid-feedback">Please provide a valid state.</div>
            </div>
            <?php // IMAGE ?>
        </div>

        <div class="row">
            <?php // DESCRIPTION: name=movieDescription ?>
            <div class="col mb-3">
                <label for="movieDescription">Description</label>
                <textarea class="form-control" id="movieDescription" name="movieDescription" rows="3"></textarea>
                <div class="invalid-feedback">Please provide a valid state.</div>
            </div>
            <?php // IMAGE ?>
        </div>
        <hr class="mb-4">
        <div class="container d-flex justify-content-center">
            <button class="btn btn-success btn-lg btn-block col-3" type="submit">Enregistrer</button>
        </div>
    </form>
</div>



<?php
require_once(__DIR__.'/partials/footer.php');
?>
