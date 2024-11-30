<?php
require_once "../model/crudAppartement.php";
$crud=new crudAppartement();
$ref=$_GET['ref'];
$res=$crud->supprimer($ref);
if($res){
    header("location:liste.php");
    exit;
}
