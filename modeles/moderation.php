<?php
function moderation($idCategorie){
    $requete = getBdd()->prepare("SELECT * FROM moderation WHERE idCategorie = ?");
    $requete->execute([$idCategorie]);
    return $requete->fetchAll(PDO::FETCH_ASSOC);
}
function moderationUtilisateur($idUtilisateur){
    $requete = getBdd()->prepare("SELECT * FROM moderation LEFT JOIN categories USING(idCategorie) WHERE idUtilisateur = ? ");
    $requete->execute([$idUtilisateur]);
    return $requete->fetchAll(PDO::FETCH_ASSOC);
}
function supprModeration($idUtilisateur,$idCategorie){
    $requete = getBdd()->prepare("DELETE FROM moderation WHERE idUtilisateur = ? AND idCategorie = ?");
    $requete->execute([$idUtilisateur,$idCategorie]);
}