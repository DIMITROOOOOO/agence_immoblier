<?php
class immobilier{
    protected $reference;

    protected $proprietaire;

    protected $localite;

    protected $surface;

    protected $nbpieces;

    protected $domaineusage;



    public function __construct($reference, $proprietaire, $localite,$surface, $nbpieces, $domaineusage)
    {
        $this->reference = $reference;
        $this->proprietaire = $proprietaire;
        $this->localite = $localite;
        $this->surface = $surface;
        $this->nbpieces = $nbpieces;
        $this->domaineusage = $domaineusage;
    }



    /**
     * Get the value of proprietaire
     */
    public function getProprietaire()
    {
        return $this->proprietaire;
    }

    /**
     * Set the value of proprietaire
     */
    public function setProprietaire($proprietaire): self
    {
        $this->proprietaire = $proprietaire;

        return $this;
    }

    /**
     * Get the value of localite
     */
    public function getLocalite()
    {
        return $this->localite;
    }

    /**
     * Set the value of localite
     */
    public function setLocalite($localite): self
    {
        $this->localite = $localite;

        return $this;
    }

    /**
     * Get the value of nbpieces
     */
    public function getNbpieces()
    {
        return $this->nbpieces;
    }

    /**
     * Set the value of nbpieces
     */
    public function setNbpieces($nbpieces): self
    {
        $this->nbpieces = $nbpieces;

        return $this;
    }

    /**
     * Get the value of domaineusage
     */
    public function getDomaineusage()
    {
        return $this->domaineusage;
    }

    /**
     * Set the value of domaineusage
     */
    public function setDomaineusage($domaineusage): self
    {
        $this->domaineusage = $domaineusage;

        return $this;
    }

    /**
     * Get the value of surface
     */
    public function getSurface()
    {
        return $this->surface;
    }

    /**
     * Set the value of surface
     */
    public function setSurface($surface): self
    {
        $this->surface = $surface;

        return $this;
    }

    /**
     * Get the value of reference
     */
    public function getReference()
    {
        return $this->reference;
    }

    /**
     * Set the value of reference
     */
    public function setReference($reference): self
    {
        $this->reference = $reference;

        return $this;
    }
}