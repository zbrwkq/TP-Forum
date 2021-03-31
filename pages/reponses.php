<?php

require_once "../traitements/header.php";
require_once "../pages/navigation.php";
require_once "../traitements/reponses.php";

?>
<body id="bodyReponse">

<!-- affichage du sujet -->
<h1 class="h3 text-center titre mt-4">SUJET : <?=$_GET["nomSujet"];?></h1>
<div class="card mx-auto mt-3" style="width: 75%">
    <div class="card-body">
        <h5 class="card-title"><?=$_GET["nomSujet"];?></h5>
        <h6 class="card-subtitle mb-4 text-muted">Par <?=$sujet["identifiant"];?></h6>
        <p class="card-text text-justify"><?=$sujet["contenu"];?></p>
    </div>
</div>

<!-- boite de réponse -->
<?php
if(!empty($_SESSION["identifiant"])){
?>
<form method="POST">
    <div>
        <textarea name="reponseSujet" rows="5" cols="45" placeholder="Réponse..." class="d-block mt-4 mx-auto"></textarea>
        <button type="submit" class="btn btn-primary d-block mx-auto mt-2 mb-2">Répondre</button>
    </div>
</form>
<?php
}

foreach($reponses as $reponse){
    ?>
    <div class="card mx-auto mb-2 w-50" style="width: 18rem;">
        <div class="card-body">
            <h5 class="card-title">
            <img src="<?=$reponse["photoProfil"];?>" alt="Photo de profil" width="30">

            <?php
                if($reponse["idRole"] == 2){
                    ?>
                    <span style="color: red">
                    <?=$reponse["identifiant"];?>

                    </span>
                    <?php
                }else if($reponse["idRole"] == 3){
                    $bleu = 0;
                    foreach($moderation as $categorie){
                        if($reponse["idUtilisateur"] == $categorie["idUtilisateur"]){
                            ?>
                            <span style="color: blue">
                            <?=$reponse["identifiant"];?>
                            </span>
                            <?php
                            $bleu = 1;
                            break;
                        }

                    }
                    if($bleu === 0 ){
                    echo $reponse["identifiant"];
                    }
                }else{
                    echo $reponse["identifiant"];
                }
                

            ?>

            
                
                -
                <small class="text-muted"><?=$reponse["heure"];?></small>
                <?php
                if(!empty($_SESSION)){
                if($_SESSION["idRole"] ==2 OR $mod == 1){
                    ?>
                    <div class="dropdown float-right">
                        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                        ...
                        </button>
                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                            <form method="post">
                                <li><input type="submit" class="dropdown-item" name="action" value="modifier"></li>
                                <li><input type="submit" class="dropdown-item" name="action" value="supprimer"></li>

                                <input type="hidden" name="id" value="<?=$reponse["idReponse"];?>">
                                <input type="hidden" name="contenu" value="<?=$reponse["contenu"];?>">
                            </form>
                        </ul>
                    </div>
                    <?php  
                }
            }
                ?>
                

            </h5>
            <p class="card-text"><?=$reponse["contenu"];?></p>
        </div>
    </div>
    <?php
}
?>
</body>