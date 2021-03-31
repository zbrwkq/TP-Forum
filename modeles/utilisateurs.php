<?php
function inscription($identifiant,$mdp){
        $mdp = password_hash($mdp, PASSWORD_BCRYPT);
        $requete = getBdd()->prepare("INSERT INTO utilisateurs(identifiant, mdp) VALUES(?, ?)");
        $requete->execute([$identifiant, $mdp]);
}
function connexion($identifiant){
        $requete=getBdd()->prepare("SELECT * FROM utilisateurs WHERE identifiant = ?");
        $requete->execute([$identifiant]);
        if($requete->rowCount() > 0){
                return $utilisateur = $requete->fetch(PDO::FETCH_ASSOC);

                if(!password_verify($mdp, $utilisateur["mdp"])){
                    return 0;
                }
            }
}
function recuperationUtilisateurs(){
        $requete=getBdd()->prepare("SELECT * FROM utilisateurs LEFT JOIN roles USING (idRole) ORDER BY designation,identifiant");
        $requete->execute();
        return $requete->fetchAll(PDO::FETCH_ASSOC);
}
function profil($identifiant){
        $requete=getBdd()->prepare("SELECT * FROM utilisateurs WHERE idUtilisateur = ?");
        $requete->execute([$identifiant]);
        return $utilisateur = $requete->fetch(PDO::FETCH_ASSOC);
}
function updateIdentifiant($identifiant,$idUtilisateur){
        $requete = getBdd() ->prepare("UPDATE utilisateurs SET identifiant = ? WHERE idUtilisateur = ?");
        $requete->execute([$identifiant,$idUtilisateur]);

}
function updateUtilisateur($identifiant,$idRole,$idUtilisateur){
        $requete = getBdd() ->prepare("UPDATE utilisateurs SET identifiant = ?, idRole = ?  WHERE idUtilisateur = ?");
        $requete->execute([$identifiant,$idRole,$idUtilisateur]);

}
function updatePhotoProfil($lienPhotoProfil,$idUtilisateur){
        $requete = getBdd() ->prepare("UPDATE utilisateurs SET photoProfil = ? WHERE idUtilisateur = ?");
        $requete->execute([$lienPhotoProfil,$idUtilisateur]);
}
function supprUtilisateur($idUtilisateur){
        $requete = getBdd()->prepare("DELETE FROM utilisateurs WHERE idUtilisateur = ? ");
        $requete->execute([$idUtilisateur]);
}