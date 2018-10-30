<?php
$ACTIVE_SESSION = true;
if ($ACTIVE_SESSION) {
?>
<ul class="navbar-nav">
<li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle" href="https://example.com" id="dropdown04" data-toggle="dropdown">$USERNAME</a>
    <div class="dropdown-menu dropdown-menu-right">
	    <a class="dropdown-item" href="#">Action</a>
        <a class="dropdown-item" href="#">Another action</a>
        <a class="dropdown-item" href="#">Something else here</a>
        <a class="btn btn-danger" href="#" role="button">Déconnexion</a>
    </div>
</li>
</ul>
<?php
}
?>