<?php
require_once "../traitements/header.php";
require_once "../pages/navigation.php";
require_once "../traitements/sujets.php";
?>

<body id="bodySujet">
<div class="container">
    <?php
    if(!empty($_SESSION["identifiant"])){
    ?>
        <a href="ajoutSujet.php?idCategorie=<?=$_GET["idCategorie"];?>&nomCategorie=<?=$_GET["nomCategorie"];?>" class="btn btn-primary d-block mx-auto my-3 w-25 text-center">Créer un sujet</a>
    <?php
    }else{
        ?>
        <div class="alert alert-danger text-center mt-2 ml-3 mr-3">
            <strong>Vous n'êtes actuellement pas connecté ! Vous pouvez donc en lecture seul concernant les sujets.</strong>
        </div>
        <?php
    }

    ?>
    <h1 class="h3 text-center mb-3">SUJETS DISPONIBLES POUR <?=$_GET["nomCategorie"];?></h1>
    <div class="row">
<?php
foreach($sujets as $sujet){
    ?>
    <div class="col-6">
        <div class="card mb-4 border border-dark" style="width: 100%;">
            <div class="card-body">
                <h5 class="card-title"><?=$sujet["designation"];?></h5>
                <h6 class="card-subtitle mb-2 text-muted"><?=$categorie["designation"];?></h6>
                <p class="card-text">
                    <?php
                    if(empty($_SESSION["identifiant"])){
                        ?>
                        Pour répondre à ce sujet, vous devez être connecter !
                        <?php
                    }else{
                    ?>
                    Pour répondre à ce sujet, cliquez sur "En savoir plus" ci-dessous.
                    <?php
                    }
                    ?>
                </p>
                <a href="reponses.php?idSujet=<?=$sujet["idSujet"];?>&nomSujet=<?=$sujet["designation"];?>&idCategorie=<?=$categorie["idCategorie"];?>" class="card-link">En savoir plus</a>
            </div>
        </div>
    </div>
    <?php
}
?>
    </div>
</div>
</body>