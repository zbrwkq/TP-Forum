<?php
require_once "../traitements/header.php";
require_once "../pages/navigation.php";
require_once "../pages/verifAdmin.php";
if($role["idRole"] != 2){
    header("location:index.php");
}

supprReponse();
?>
