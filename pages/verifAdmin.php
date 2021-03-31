<?php
require_once "../traitements/header.php";
if($_SESSION["idRole"] != 2){
    header("location:index.php");
}
?>