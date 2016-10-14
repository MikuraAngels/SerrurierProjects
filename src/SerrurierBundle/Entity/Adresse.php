<?php

namespace SerrurierBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Adresse
 */
class Adresse
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     */
    private $adresse;

    /**
     * @var string
     */
    private $codePostal;

    /**
     * @var string
     */
    private $ville;

    /**
     * @var string
     */
    private $pays;

    /**
     * @var Serrurier
     */
    private $serrurier;

    /**
     * @return Serrurier
     */
    public function getSerrurier()
    {
        return $this->serrurier;
    }

    /**
     * @param Serrurier $serrurier
     */
    public function setSerrurier($serrurier)
    {
        $this->serrurier = $serrurier;
    }

    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set adresse
     *
     * @param string $adresse
     * @return Adresse
     */
    public function setAdresse($adresse)
    {
        $this->adresse = $adresse;

        return $this;
    }

    /**
     * Get adresse
     *
     * @return string 
     */
    public function getAdresse()
    {
        return $this->adresse;
    }

    /**
     * Set codePostal
     *
     * @param string $codePostal
     * @return Adresse
     */
    public function setCodePostal($codePostal)
    {
        $this->codePostal = $codePostal;

        return $this;
    }

    /**
     * Get codePostal
     *
     * @return string 
     */
    public function getCodePostal()
    {
        return $this->codePostal;
    }

    /**
     * Set ville
     *
     * @param string $ville
     * @return Adresse
     */
    public function setVille($ville)
    {
        $this->ville = $ville;

        return $this;
    }

    /**
     * Get ville
     *
     * @return string 
     */
    public function getVille()
    {
        return $this->ville;
    }

    /**
     * Set pays
     *
     * @param string $pays
     * @return Adresse
     */
    public function setPays($pays)
    {
        $this->pays = $pays;

        return $this;
    }

    /**
     * Get pays
     *
     * @return string 
     */
    public function getPays()
    {
        return $this->pays;
    }
}
