<?php
require_once "../traitements/header.php";
require_once "../pages/navigation.php";
require_once "../traitements/profil.php";
?>

<body>
<div class="container-fluid w-50 text-center mt-5">
    <h1 class="mb-4">Profil de <?=$informationsProfil["identifiant"];?></h1>


<form method="post" enctype="multipart/form-data">
    <ul class="list-group mb-4">
        <li class="list-group-item"><span class="h6">Identifiant :</span> 
        <input type="text" name="identifiant" id="identifiant" value="<?=$informationsProfil["identifiant"];?>"></li>
        
        <li class="list-group-item"><span class="h6">Photo de profil :</span>
            <input type="file" name="pdp" id="pdp">
        </li>
    </ul>

    <button type="submit" class="btn btn-primary">Envoyé</button>
    </form>
    </div>
</body>