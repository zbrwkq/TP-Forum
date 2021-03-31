<?php
require_once "../traitements/header.php";
require_once "../traitements/connexion.php";
?>

<head>
    <link rel="stylesheet" href="../pages/css/styleIC.css">
</head>


<body class="d-flex justify-content-center">
<h1 id="titre">Forum - PHP</h1>
<div id="formConnexion" class="border border-white">
        <h1>Connexion</h1>
        <form method="POST">
            <div class="form-group">
                <label for="identifiant" class="form-control-lg mb-0">Identifiant</label>
                <input type="text" class="form-control form-control-lg" id="identifiant" name="identifiant" placeholder="Entrez votre identifiant" required>
            </div>
            <div class="form-group">
                <label for="mdp" class="form-control-lg mb-0">Mot de passe</label>
                <input type="password" class="form-control form-control-lg" id="mdp" name="mdp" placeholder="Mot de passe" required>
            </div>
            <div class="text-center d-flex justify-content-center flex-column">
                <a href="inscription.php" class="mb-3 text-white">Vous n'êtes pas encore inscrit ? S'inscrire</a>
                <button type="submit" class="btn btn-info btn-lg" name="envoi" value="1">Se connecter</button>
            </div>
        </form>
</div>
</body>