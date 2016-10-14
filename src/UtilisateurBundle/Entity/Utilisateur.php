<?php

namespace UtilisateurBundle\Entity;

use FOS\UserBundle\Entity\User as BaseUser;
use Doctrine\ORM\Mapping as ORM;
use SerrurierBundle\Entity\Intervention;


/**
 * Utilisateur
 */
class Utilisateur extends BaseUser
{
    /**
     * @var int
     */
    protected $id;

    /**
     * @var string
     */
    private $nom;

    /**
     * @var string
     */
    private $prenom;

    /**
     * @var int
     */
    private $telephone;

    /**
     * @var string
     */
    private $adresse;

    /**
     * @var string
     */
    private $ville;

    /**
     * @var string
     */
    private $codePostal;

    /**
     * @var string
     */
//    private $imageProfil;

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
     * @return Utilisateur
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

    /**
     * Set prenom
     *
     * @param string $prenom
     * @return Utilisateur
     */
    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;

        return $this;
    }

    /**
     * Get prenom
     *
     * @return string 
     */
    public function getPrenom()
    {
        return $this->prenom;
    }

    /**
     * Set telephone
     *
     * @param integer $telephone
     * @return Utilisateur
     */
    public function setTelephone($telephone)
    {
        $this->telephone = $telephone;

        return $this;
    }

    /**
     * Get telephone
     *
     * @return integer 
     */
    public function getTelephone()
    {
        return $this->telephone;
    }

    /**
     * Set adresse
     *
     * @param string $adresse
     * @return Utilisateur
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
     * Set ville
     *
     * @param string $ville
     * @return Utilisateur
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
     * Set codePostal
     *
     * @param string $codePostal
     * @return Utilisateur
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

//    /**
//     * @return string
//     */
//    public function getImageProfil()
//    {
//        return $this->imageProfil;
//    }
//
//    /**
//     * @param string $imageProfil
//     */
//    public function setImageProfil($imageProfil)
//    {
//        $this->imageProfil = $imageProfil;
//    }

}
