<?php

namespace SerrurierBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use UtilisateurBundle\Entity\Utilisateur;

/**
 * Intervention
 */
class Intervention
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var \DateTime
     */
    private $dateDebut;

    /**
     * @var \DateTime
     */
    private $dateFin;

    /**
     * @var Serrurier
     */
    private $serrurier;

    /**
     * @var Utilisateur
     */
    private $utilisateur;
    

    /**
     * @return Serrurier $serrurier
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
     * @return Utilisateur $utilisateur
     */
    public function getUtilisateur()
    {
        return $this->utilisateur;
    }

    /**
     * @param Utilisateur $utilisateur
     */
    public function setUtilisateur($utilisateur)
    {
        $this->utilisateur = $utilisateur;
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
     * Set dateDebut
     *
     * @param string $dateDebut
     * @return Intervention
     */
    public function setDateDebut($dateDebut)
    {
        $this->dateDebut = $dateDebut;

        return $this;
    }

    /**
     * Get dateDebut
     *
     * @return string 
     */
    public function getDateDebut()
    {
        return $this->dateDebut;
    }

    /**
     * Set dateFin
     *
     * @param \DateTime $dateFin
     * @return Intervention
     */
    public function setDateFin($dateFin)
    {
        $this->dateFin = $dateFin;

        return $this;
    }

    /**
     * Get dateFin
     *
     * @return \DateTime 
     */
    public function getDateFin()
    {
        return $this->dateFin;
    }
}
