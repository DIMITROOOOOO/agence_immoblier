<?php

include "../view/modifier.php";
include "../view/liste.php";
$ref=$_GET['ref'];
$prop=$_GET['prop'];
$loc=$_GET['loc'];
$sur=$_GET['sur'];
$use=$_GET['use'];
$nb=$_GET['nb'];
$ep=$_GET['ep'];
if(isset($_POST['ok'])){
    require_once "../model/crudAppartement.php";
    $crud=new crudAppartement();
    $ref=htmlspecialchars($_POST['ref']);
    $prop=htmlspecialchars($_POST['prop']);
    $loc=htmlspecialchars($_POST['loc']);
    $sur=htmlspecialchars($_POST['sur']);
    $dom=htmlspecialchars($_POST['dom']);
    $nbp=htmlspecialchars($_POST['nbp']);
    $surface=htmlspecialchars($_POST['surface']);
    $appartement=new appartement($ref,$prop,$loc,$sur,$nbp,$dom,$surface);
    $res=$crud->modifier($appartement);
    if($res){
        header('location:liste.php');exit;
    }
    
  

}
