<?php
require_once "../traitements/header.php";
require_once "../pages/navigation.php";
require_once "../pages/verifAdmin.php";
require_once "../traitements/ajoutUtilisateur.php";

?>
<head>
    <link rel="stylesheet" href="css/style.css">
</head>

<div class="container">
    <h1>Ajouter un utilisateur</h1>
    <form method="post">
        <label for="identifiant" class="form-control-lg">Identifiant</label>
        <input type="text" name="identifiant" id="identifiant" class="form-control form-control-lg" placeholder="Saisir un identifiant" required>
        <div class="form-group d-flex">
            <div class="w-50 mr-2">
                <label for="mdp" class="form-control-lg mb-0">Mot de passe</label>
                <input type="password" class="form-control form-control-lg" id="mdp" name="mdp" placeholder="Saisir un mot depasse" required> 
                <img src="images/eye.png" onclick="togglePassword('mdp')" class="field-icon">
            </div>
            <div class="w-50">
                <label for="confirmationMdp" class="form-control-lg mb-0">Confirmation</label>
                <input type="password" class="form-control form-control-lg" id="confirmationMdp" name="confirmationMdp"placeholder="Confirmer le mot de passe" required>
                <img src="images/eye.png" onclick="togglePassword('confirmationMdp')" class="field-icon">
            </div>
        </div>
        <input type="hidden" name="envoi" value="1">
        <input type="submit" class="btn btn-primary">
        <a href="listeUtilisateurs.php" class="btn btn-info mx-2">Retour</a>
    </form>
</div>