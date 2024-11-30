<?php
require_once "config.php";
require "appartement.php";
class crudAppartement{
    private $connexion;
    public function __construct() {
        $config=new config();
        $this->connexion= $config->getconnexion();
    }
    function ajouterApp(appartement $appartement){
        $ref=$appartement->getReference();
        $prop=$appartement->getProprietaire();
        $loc=$appartement->getLocalite();
        $sur=$appartement->getSurface();
        $nbp=$appartement->getNbpieces();
        $dom=$appartement->getDomaineusage();
        $surface=$appartement->getSurfaceEspaceCommun();
        $sql="INSERT INTO immobilier (reference,proprietaire,localite,nbpieces,domaineusage,nature,nbetage,surfaceeommune,surface) 
            VALUES ($ref,'$prop','$loc',$nbp,'$dom','Appartement',NULL,$surface,$sur);";
        $res=$this->connexion->exec($sql);
        return $res;
    }
    function recuperer($ref){
        $sql="select * from immobilier where reference=$ref";
        $res=$this->connexion->query($sql);
        return $res->fetch(PDO::FETCH_NUM);

    }
    function supprimer($ref){
        $sql="delete from immobilier where reference=$ref";
        $res=$this->connexion->exec($sql);
        return $res;
    }
    function modifier(appartement $appartement){
        $ref=$appartement->getReference();
        $prop=$appartement->getProprietaire();
        $loc=$appartement->getLocalite();
        $sur=$appartement->getSurface();
        $nbp=$appartement->getNbpieces();
        $dom=$appartement->getDomaineusage();
        $surface=$appartement->getSurfaceEspaceCommun();
        $sql="update immobilier set reference=$ref , proprietaire='$prop' , localite='$loc' , nbpieces=$nbp , domaineusage='$dom', nature='Appartement',
            nbetage=NULL,surfaceeommune=$surface,surface=$sur;
        ";
        $res=$this->connexion->exec($sql);
        return $res;
    }
    function listerApp(){
        $sql="select * from immobilier";
        $res=$this->connexion->query($sql);
        return $res->fetchALL(PDO::FETCH_NUM);
    }
}