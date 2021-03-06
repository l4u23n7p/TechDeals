<nav class="navbar navbar-default navbar-custom navbar-static-top">
    <div class="container">
        <a class="navbar-brand" href="/">
            <img src="assets/icones/logo.png" width="130px">
        </a>
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar"
                    aria-expanded="false"
                    aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
                <li>
                    <a href="/">Accueil</a>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
                       aria-expanded="false">Catégories
                        <span class="caret"></span>
                    </a>
                    <ul class="dropdown-menu">
						<?php echo $category->getNavCat(); ?>
                    </ul>
                </li>
                <li>
                    <a href="/contact-us.php">Contact</a>
                </li>
                <li class="search-nav">
                    <div class="navbar-form navbar-left" role="search">
                        <form name="search" method="get" class="form-inline" action="view.php">
                            <div class="form-group">
                                <div class="input-group">
                                    <input id="search-input" type="text"
                                           class="form-control search-form" name="search"
                                           placeholder="Rechercher">

                                </div>
                            </div>
                            <button type="submit" class="btn hidden"><i class="fa fa-search" aria-hidden="true"></i></button>
                        </form>
                    </div>
                </li>
            </ul>
            <ul class="nav navbar-nav navbar-right nav-custom">
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
                       aria-expanded="false">
                        <i class="socicon-users custom-icon"></i>Mon compte
                        <span class="caret"></span>
                    </a>
                    <ul class="dropdown-menu">
						<?php if( $session->read( 'connected' ) != null ) : ?>
                            <li class="dropdown-header">
								<?php $session->doubleGet( 'connected', 'username' ); ?>
                            </li>
                            <li>
                                <a href="/profile.php">
                                    <i class="socicon-users"></i>Profil</a>
                            </li>
                            <li>
                                <a href="/orders.php">
                                    <i class="socicon-shopping-cart-black-shape"></i>Commandes</a>
                            </li>
							<?php if( $restrict->isAllow( '/dashboard/' ) ) : ?>
                                <div class="divider"></div>
                                <li>
                                    <a href="/dashboard/" class="item">
                                        <i class="socicon-dashboard"></i>Dashboard</a>
                                </li>
							<?php endif; ?>
                            <li role="separator" class="divider"></li>
                            <li>
                                <a href="/logout.php">
                                    <i class="socicon-logout"></i>Déconnexion</a>
                            </li>
						<?php else : ?>
                            <li>
                                <a href="../signup.php" class="">
                                    <i class="socicon-add-square-button"></i> Inscription</a>
                            </li>
                            <li>
                                <a href="../login.php" class="">
                                    <i class="socicon-login"></i> Connexion</a>
                            </li>
						<?php endif; ?>
                    </ul>
                </li>
                <li class="cart">
                    <a href="/panier.php">
                        <i class="socicon-shopping-cart-black-shape custom-icon"></i>Panier <?php $util::countCart() ?>
                    </a>
                </li>
            </ul>
        </div>
</nav>

<?php $util::get_alert( 'default' ); ?>