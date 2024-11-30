<?php
include "immobilier.php";
class appartement extends immobilier{
    private $surfaceEspaceCommun;

    public function __construct($reference,$proprietaire,$localite,$surface,$nbpieces,$domaineusage,$surfaceEspaceCommun)
    {   
        parent::__construct($reference,$proprietaire,$localite,$surface,$nbpieces,$domaineusage);
        $this->surfaceEspaceCommun = $surfaceEspaceCommun;
    }

    

    /**
     * Get the value of surfaceEspaceCommun
     */
    public function getSurfaceEspaceCommun()
    {
        return $this->surfaceEspaceCommun;
    }

    /**
     * Set the value of surfaceEspaceCommun
     */
    public function setSurfaceEspaceCommun($surfaceEspaceCommun): self
    {
        $this->surfaceEspaceCommun = $surfaceEspaceCommun;

        return $this;
    }
}