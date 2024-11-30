<?php
require_once "../model/crudAppartement.php";
$crud=new crudAppartement();
$lesappartment=$crud->listerApp();
include "../view/liste.php";
?>