<?php
function recuperationRoles(){
    $requete=getBdd()->prepare("SELECT * FROM roles");
    $requete->execute();
    return $requete->fetchAll(PDO::FETCH_ASSOC);
}