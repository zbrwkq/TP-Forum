<?php
require_once "../traitements/header.php";
require_once "../pages/navigation.php";
require_once "../traitements/index.php";

?>

<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="../pages/css/style.css">
</head>

<body id="bodyIndex">

    <?php
    if(empty($_SESSION["identifiant"])){
        ?>
        <div class="alert alert-danger text-center mt-2 ml-3 mr-3">
            <strong>Vous n'êtes actuellement pas connecté ! Vous pouvez donc en lecture seul concernant les sujets.</strong>
        </div>
        <?php
    }else{
        ?>
        <div class="alert alert-success text-center mt-2 ml-3 mr-3">
            <strong>Bonjour <?=$_SESSION["identifiant"];?> ! Si vous n'êtes pas <?=$_SESSION["identifiant"];?>, merci de vous déconnecter.</strong>
        </div>
        <?php
    }
    ?>

    <div class="container">
        <h1 class="h2 text-center mt-4 mb-4 titreSujets bg-secondary p-3 rounded border border-dark">CATÉGORIES DISPONIBLES</h1>
        <div class="row">
            <?php
            foreach($recuperationCategories as $categorie){
                ?>
                <div class="col-4">
                    <div class="card text-center mx-4 my-3 border border-dark cardColor" style="width: 18rem;">
                        <div class="card-body">
                            <img class="card-img-top mb-3 imgCard" src="<?=$categorie["photo"];?>" alt="Image d'illustration">
                            <h5 class="card-title"><?=$categorie["designation"];?></h5>
                            <p class="card-text">Pour démarrer un nouveau sujet de conversation dans cette catégorie cliquez sur le bouton ci-dessous et tous les sujets concernant la catégorie seront affichés !</p>
                            <a href="sujets.php?idCategorie=<?=$categorie["idCategorie"];?>&nomCategorie=<?=$categorie["designation"];?>" class="btn btn-primary">M'y rendre</a>
                        </div>
                    </div>
                </div>
                <?php
            }
            ?>
        </div>
    </div>
</body>