<?php
if ( isset($_SESSION['active']) ) {
?>

<ul class="navbar-nav">
<li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle" href="#" id="dropdown04" data-toggle="dropdown"><?php echo $_SESSION['USERNAME'];?></a>
    <div class="dropdown-menu dropdown-menu-right">
	    <a class="dropdown-item" href="<?= $DOCUMENT_ROOT ?>/movie_add.php">Ajouter un film</a>
        <a class="dropdown-item" href="#">Another action</a>
        <a class="dropdown-item" href="#">Something else here</a>
        <form action="<?php echo $DOCUMENT_ROOT ?>/logout.php" method="POST">
            <input type="hidden" name="lastpage" value="<?php echo $_SERVER['REQUEST_URI']; ?>">
            <input type="submit" class="btn btn-danger" value="Deconnexion">
        </form>

        <!-- <a class="btn btn-danger" href="<?php echo $DOCUMENT_ROOT ?>/logout.php" role="button">Déconnexion</a> -->
    </div>
</li>
</ul>

<?php
}
else { ?>

    <ul class="navbar-nav">
        <form action="<?php echo $DOCUMENT_ROOT ?>/login.php" method="POST">
            <input type="hidden" name="username" value="Toto">
            <input type="hidden" name="lastpage" value="<?php echo $_SERVER['REQUEST_URI']; ?>">
            <input type="submit" class="btn btn-success" value="Connexion">
        </form>
    </ul>

<?php

}
?>