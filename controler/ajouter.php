<?php
require_once "../model/crudAppartement.php";
$crud=new crudAppartement();
include "../view/ajouter.php";
if(isset($_POST['ok'])){
    $ref=htmlspecialchars($_POST['ref']);
    $prop=htmlspecialchars($_POST['prop']);
    $loc=htmlspecialchars($_POST['loc']);
    $sur=htmlspecialchars($_POST['sur']);
    $dom=htmlspecialchars($_POST['dom']);
    $nbp=htmlspecialchars($_POST['nbp']);
    $surface=htmlspecialchars($_POST['surface']);
    $appartement=new appartement($ref,$prop,$loc,$sur,$nbp,$dom,$surface);
    $res=$crud->ajouterApp($appartement);
    if($res){
        header('location:liste.php');exit;
    }

}
