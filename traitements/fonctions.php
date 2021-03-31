<?php
function getBdd()
{
    // INITIALISATION DE LA CONNEXION A LA BDD
    return new PDO('mysql:host=localhost;dbname=forum', 'root', '', [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);
}
function uploadPdp($idUtilisateur){
    require_once "../modeles/utilisateurs.php";
    $dossier = "../pages/images/profil/";
    $nom = "photoProfil".$idUtilisateur;
    $extension = strtolower(pathinfo($_FILES["pdp"]["name"], PATHINFO_EXTENSION));
    $fichier = $dossier . $nom . "." . $extension;

    if(getimagesize($_FILES["pdp"]["tmp_name"])){
        if($_FILES["pdp"]["size"] <=2000000 || $_FILES["pdp"]["error"] == 1){
            if($_FILES["pdp"]["type"] == "image/png" || $_FILES["pdp"]["type"] == "image/jpeg" ){
                if(move_uploaded_file($_FILES["pdp"]["tmp_name"],$fichier)){
                    updatePhotoProfil($fichier,$idUtilisateur);
                    return "l'image a bien été enregistré";
                }else{
                    return "le fichier n'a pas pu être enregistré";
                }
            } else{
            return "le fichier n'a pas le bon type";
            }
        }else{
            return "le fichier pèse plus de 2M";
        }
    }else{
        return "le fichier n'est pas une image";
    }
}