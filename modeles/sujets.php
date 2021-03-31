<?php

function recuperationSujets($idCategorie){
    $requete = getBdd()->prepare("SELECT * FROM sujets WHERE idCategorie = ?");
    $requete->execute([$idCategorie]);
    return $requete->fetchAll(PDO::FETCH_ASSOC);
}

function ajoutSujet($idCategorie,$idUtilisateur,$designation,$contenu){
    $requete = getBdd()->prepare("INSERT INTO sujets(designation, idCategorie, contenu, idUtilisateur) VALUE (?,?,?,?)");
    $requete->execute([$designation,$idCategorie,$contenu,$idUtilisateur]);
}
function sujet($idSujet){
    $requete = getBdd()->prepare("SELECT contenu, identifiant FROM sujets LEFT JOIN utilisateurs USING (idUtilisateur) WHERE idSujet = ?");
    $requete->execute([$idSujet]);
    return $requete->fetch(PDO::FETCH_ASSOC);
}
?>