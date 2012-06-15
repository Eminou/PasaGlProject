<?php

namespace Pasa\RequirementBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Pasa\RequirementBundle\Entity\Progression
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class Progression {

    // ...
    /**
     * @ORM\ManyToOne(targetEntity="Exigency", inversedBy="progressions")
     * @ORM\JoinColumn(name="exigency_id", referencedColumnName="id")
     */
    private $exigency;

    /**
     * @var integer $id
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var integer $percentage
     *
     * @ORM\Column(name="percentage", type="integer")
     */
    private $percentage;

    /**
     * @var date $progression_date
     *
     * @ORM\Column(name="progression_date", type="date")
     */
    private $progression_date;

    /**
     * Get id
     *
     * @return integer 
     */
    public function getId() {
        return $this->id;
    }

    /**
     * Set percentage
     *
     * @param integer $percentage
     */
    public function setPercentage($percentage) {
        $this->percentage = $percentage;
    }

    /**
     * Get percentage
     *
     * @return integer 
     */
    public function getPercentage() {
        return $this->percentage;
    }

    /**
     * Set progression_date
     *
     * @param date $progressionDate
     */
    public function setProgressionDate($progressionDate) {
        $this->progression_date = $progressionDate;
    }

    /**
     * Get progression_date
     *
     * @return date 
     */
    public function getProgressionDate() {
        return $this->progression_date;
    }

    /**
     * Set exigency
     *
     * @param Pasa\RequirementBundle\Entity\Exigency $exigency
     */
    public function setExigency(\Pasa\RequirementBundle\Entity\Exigency $exigency)
    {
        $this->exigency = $exigency;
    }

    /**
     * Get exigency
     *
     * @return Pasa\RequirementBundle\Entity\Exigency 
     */
    public function getExigency()
    {
        return $this->exigency;
    }
}