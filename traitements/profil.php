<?php
require_once "../modeles/modele.php";

if(empty($_SESSION["idUtilisateur"])){
    header("location:index.php");
}else{
    $informationsProfil = profil($_SESSION["idUtilisateur"]);
}

if(!empty($_POST["identifiant"])){        
    try{
        updateIdentifiant($_POST["identifiant"], $_SESSION["idUtilisateur"]);
        $_SESSION["identifiant"] = $_POST["identifiant"];
    }catch(Exception $e){
        ?>
        Erreur : profil non modifié</>
        <?php
    }
    if(!empty($_FILES["pdp"]["name"])){
        try{
            $message = uploadPdp($_SESSION["idUtilisateur"]);
            echo $message;
        }catch(Exception $e){
            ?>
            Erreur : profil non modifié</>
            <?php
        }
    }
    header("location:profil.php");
}