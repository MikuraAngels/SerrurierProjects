<?php

namespace SerrurierBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Serrurier
 */
class Serrurier
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     */
    private $nom;
    /**
     * @var string
     */
    private $prenom;
    /**
     * @var string
     */
    private $societe;
    /**
     * @var string
     */
    private $telephone;
    /**
     * @var string
     */
    private $email;
    /**
     * @var string
     */
    private $password;

    /**
     * @var Adresse
     */
    private $adresse;


    /**
     * @var ArrayCollection
     */
    private $listeIntervention;

    /**
     * @return ArrayCollection
     */
    public function getListeIntervention()
    {
        return $this->listeIntervention;
    }

    /**
     * @param ArrayCollection $listeIntervention
     */
    public function setListeIntervention($listeIntervention)
    {
        $this->listeIntervention = $listeIntervention;
    }

    

    /**
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param string $email
     */
    public function setEmail($email)
    {
        $this->email = $email;
    }

    /**
     * @return string
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * @param string $password
     */
    public function setPassword($password)
    {
        $this->password = $password;
    }


    /**
     * @return string
     */

    public function getPrenom()
    {
        return $this->prenom;
    }

    /**
     * @param string $prenom
     */
    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;
    }

    /**
     * @return string
     */
    public function getSociete()
    {
        return $this->societe;
    }

    /**
     * @param string $societe
     */
    public function setSociete($societe)
    {
        $this->societe = $societe;
    }

    /**
     * @return string
     */
    public function getTelephone()
    {
        return $this->telephone;
    }

    /**
     * @param string $telephone
     */
    public function setTelephone($telephone)
    {
        $this->telephone = $telephone;
    }

    /**
     * @return Adresse
     */
    public function getAdresse()
    {
        return $this->adresse;
    }
    /**
     * @param Adresse $adresse
     */
    public function setAdresse($adresse)
    {
        $this->adresse = $adresse;
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
     * Set nom
     *
     * @param string $nom
     * @return Serrurier
     */
    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get nom
     *
     * @return string 
     */
    public function getNom()
    {
        return $this->nom;
    }
}
