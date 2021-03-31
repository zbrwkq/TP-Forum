<?php
require_once "../traitements/header.php";
require_once "../pages/navigation.php";
require_once "../traitements/ajoutSujet.php";

?>

<head>

</head>
<!-- formulaire d'ajout -->
<div class="container">
    <h1 class="mt-3"><?=$_GET["nomCategorie"];?></h1>
    <h3 class="my-3">Création d'un sujet</h3>
    <form method="post" class="form-group">
        <label for="designation" class="form-label">Nom du sujet</label>
        <input type="text" name="designation" id="designation" class="form-control">
        <label for="contenu" class="from-label">Raconte nous </label><br>
        <textarea name="contenu" id="contenu" cols="30" rows="10" autocapitalize ="sentences" class="w-100"></textarea><br>
        <input type="submit" class="btn btn-primary w-25">
    </form>
</div>