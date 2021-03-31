<?php
require_once "../modeles/modele.php";

$erreurs = [];

if(!empty($_POST["envoi"]) && $_POST["envoi"] == 1){
    if(!empty($_POST["identifiant"]) && !empty($_POST["mdp"]) && !empty($_POST["confirmationMdp"])){
        extract($_POST);

        if($mdp != $confirmationMdp){
            $erreurs[] = "Les mots de passes saisis ne sont pas identiques";
        }
        if(strlen($mdp) < 8){
            $erreurs[] = "Le mot de passe doit faire au moins 8 caractères";
        }

        if(count($erreurs) == 0){
            inscription($identifiant,$mdp);
        }else{
            ?>
            <div class="alert alert-danger mt-5">
            Une erreur est survenue : 
            <?php
            foreach($erreurs as $erreur){
                echo($erreur);
            }
            ?>
            </div>
            <?php
        }
    }
}