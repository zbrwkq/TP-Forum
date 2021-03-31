<?php

function ajoutReponse($contenu,$idSujet,$idUtilisateur){
    $requete = getBdd()->prepare("INSERT INTO reponses(contenu, idSujet,idUtilisateur,heure) VALUES(?, ?, ?, NOW())");
    $requete->execute([$contenu,$idSujet,$idUtilisateur]);
}
function modifReponse($modifReponse,$idReponse){
    $requete = getBdd()->prepare("UPDATE reponses SET contenu = ? WHERE idReponse = ?");
    $requete->execute([$modifReponse,$idReponse]);
}
function recuperationReponse($idSujet){
    $requete = getBdd()->prepare("SELECT contenu,identifiant,heure,idReponse,photoProfil,roles.idRole,idUtilisateur FROM reponses LEFT JOIN utilisateurs USING (idUtilisateur) LEFT JOIN roles USING(idRole) WHERE idSujet = ?");
    $requete->execute([$idSujet]);
    return $requete->fetchAll(PDO::FETCH_ASSOC);
}
function supprReponse($idReponse){
    $requete=getBdd()->prepare("DELETE FROM reponses WHERE idReponse = ?");
    $requete->execute([$idReponse]);
}


