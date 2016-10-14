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
     * @var Serrurier
     */
    private $serrurier;
    
    /**
     * @var \DateTime
     */
    private $debutIntervention;

    /**
     * @var \DateTime
     */
    private $finIntervention;
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
