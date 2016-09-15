<?php

namespace SerrurierBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Planning
 */
class Planning
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var \DateTime
     */
    private $debutIntervention;

    /**
     * @var \DateTime
     */
    private $finIntervention;


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
     * Set debutIntervention
     *
     * @param \DateTime $debutIntervention
     * @return Planning
     */
    public function setDateIntervention($debutIntervention)
    {
        $this->dateIntervention = $debutIntervention;

        return $this;
    }

    /**
     * Get debutIntervention
     *
     * @return \DateTime 
     */
    public function getDebutIntervention()
    {
        return $this->debutIntervention;
    }

    /**
     * Set finIntervention
     *
     * @param \DateTime $finIntervention
     * @return Planning
     */
    public function setFinIntervention($finIntervention)
    {
        $this->finIntervention = $finIntervention;

        return $this;
    }

    /**
     * Get finIntervention
     *
     * @return \DateTime 
     */
    public function getFinIntervention()
    {
        return $this->finIntervention;
    }
}
