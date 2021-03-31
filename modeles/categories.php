<?php
function recuperationCategories(){
    $requete = getBdd()->prepare("SELECT * FROM categories");
    $requete->execute();
    return $requete->fetchAll(PDO::FETCH_ASSOC);
}
function categorie($id){
    $requete = getBdd()->prepare("SELECT * FROM categories WHERE idCategorie = ?");
    $requete->execute([$id]);
    return $requete->fetch(PDO::FETCH_ASSOC);
}
function ajoutCategorie($designation){
    $requete=getBdd()->prepare("INSERT INTO categories(designation) VALUE(?)");
    $requete->execute([$designation]);
}
function updateCategorie($designation,$idCategorie){
    $requete = getBdd() ->prepare("UPDATE categories SET designation = ? WHERE idCategorie = ?");
    $requete->execute([$designation,$idCategorie]);
}
function updateImage($lien,$idCategorie){
    $requete = getBdd() ->prepare("UPDATE categories SET photo = ? WHERE idCategorie = ?");
    $requete->execute([$lien,$idCategorie]);
}
function supprCategorie($idCategorie){
    $requete=getBdd()->prepare("DELETE FROM categories WHERE idCategorie = ?");
    $requete->execute([$idCategorie]);
}