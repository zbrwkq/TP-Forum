<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand mr-5" href="index.php">
            <img src="images/php.png" class="d-inline-block align-top mr-2" alt="Logo forum" width="30">
            Forum - PHP
            </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="index.php">Accueil</a>
                </li>
                <?php
                if(!empty($_SESSION)){
                    ?>
                <li class="nav-item active">
                        <a class="nav-link" href="profil.php">Mon profil</a>
                </li>
                <?php
                }
                ?>
            </ul>
        </div>
        
        <?php
        if(!empty($_SESSION["idRole"]) == 2 && $_SESSION["idRole"] == 2){
            ?>
            <a class="btn btn-warning float-right" href="administration.php">Administration</a>
            <?php
        }else{}
        if(!empty($_SESSION["identifiant"])){
            ?>
            <a class="btn btn-danger float-right mx-4" href="deconnexion.php">Déconnexion</a>
            <?php
        }else{
            ?>
            <a class="btn btn-success float-right mx-4" href="inscription.php">Inscription</a>
            <a class="btn btn-info float-right" href="connexion.php">Connexion</a>
            <?php
        }
        ?>
</nav>