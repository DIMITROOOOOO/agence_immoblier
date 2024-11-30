<?php
require_once "../model/crudAppartement.php";
$crud=new crudAppartement();
if(isset($_POST['ok'])){
    $ref=htmlspecialchars($_POST['ref']);
    $res=$crud->recuperer($ref);
    if($res){
       include "../view/appartemnt.php";
       exit;
    }

}