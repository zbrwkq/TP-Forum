<?php
require_once "../modeles/modele.php";
    // Tableau d'erreurs
    $erreurs = [];

    if(!empty($_POST["envoi"]) && $_POST["envoi"] == 1){
        if(!empty($_POST["identifiant"]) && !empty($_POST["mdp"])){
            extract($_POST);

            if(strlen($mdp) < 8){
                $erreurs [] = "Le mot de passe doit faire au moins 8 caractères";
            }

            if(count($erreurs) == 0){
                $utilisateur = connexion($identifiant);
                if($utilisateur == 0){
                    $erreurs[] = "Le mot de passe saisi est incorrect";
                }
            }
        }else{
            $erreurs[] = "Au moins un champs n'a pas été saisi";
        }


        if(count($erreurs) === 0){
            $_SESSION = $utilisateur;
            header("location:index.php");
        }else{
            ?>
            <div class="alert alert-danger mt-5 position-absolute">
                Erreur : 
                <?php
                foreach($erreurs as $erreur){
                    echo($erreur);
                }
                ?>
            </div>
            <?php
        }
    }