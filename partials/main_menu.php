<?php

?>

<ul class="navbar-nav mr-auto">
    <li class="nav-item active">
	    <a class="nav-link" href="<?= $DOCUMENT_ROOT;?>/">Home</a>
	</li>
	
	<li class="nav-item dropdown">
		<a class="nav-link dropdown-toggle" href="#" id="category-dropdown" data-toggle="dropdown">
			<?php
				// Afficher la catégorie courante si
				// la page est celle d'un film
				//
				// Sinon ...
				echo 'Catégorie';
			?>
		</a>
		<div class="dropdown-menu">
			<?php
            	$categories = get_categories();
            	foreach ($categories as $id => $name) {
					echo '<a class="dropdown-item" href="#">';
					echo $name;
            		echo '</a>' . "\n";
            	}
			?>
    	</div>
	</li>
          
</ul>
