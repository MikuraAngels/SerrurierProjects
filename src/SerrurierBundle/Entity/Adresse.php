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
     * @var ArrayCollection
     */
    private $listeSerrurier;

    /**
     * @return ArrayCollection
     */
    public function getListeSerrurier()
    {
        return $this->listeSerrurier;
    }

    /**
     * @param ArrayCollection $listeSerrurier
     */
    public function setListeSerrurier($listeSerrurier)
    {
        $this->listeSerrurier = $listeSerrurier;
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
}
