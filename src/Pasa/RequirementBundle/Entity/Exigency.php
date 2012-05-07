<?php

namespace Pasa\RequirementBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;

/**
 * Pasa\RequirementBundle\Entity\Exigency
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class Exigency {

    // ...
    /**
     * @ORM\OneToMany(targetEntity="Progression", mappedBy="exigency")
     */
    private $progressions;
    // ...
    /**
     * @ORM\ManyToOne(targetEntity="Project", inversedBy="exigencies")
     * @ORM\JoinColumn(name="project_id", referencedColumnName="id")
     */
    private $project;

    public function __construct() {
        $this->progressions = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * @var integer $id
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string $functionality
     *
     * @ORM\Column(name="functionality", type="string", length=255)
     */
    private $functionality;

    /**
     * @var integer $number
     *
     * @ORM\Column(name="number", type="integer")
     */
    private $number;

    /**
     * @var text $description
     *
     * @ORM\Column(name="description", type="text")
     */
    private $description;

    /**
     * @var integer $priority
     *
     * @ORM\Column(name="priority", type="integer")
     */
    private $priority;

    /**
     * @var integer $charge
     *
     * @ORM\Column(name="charge", type="integer")
     */
    private $charge;

    /**
     * @var date $start_date
     *
     * @ORM\Column(name="start_date", type="date")
     */
    private $start_date;

    /**
     * @var date $end_date
     *
     * @ORM\Column(name="end_date", type="date")
     */
    private $end_date;

    /**
     * Get id
     *
     * @return integer 
     */
    public function getId() {
        return $this->id;
    }

    /**
     * Set functionality
     *
     * @param string $functionality
     */
    public function setFunctionality($functionality) {
        $this->functionality = $functionality;
    }

    /**
     * Get functionality
     *
     * @return string 
     */
    public function getFunctionality() {
        return $this->functionality;
    }

    /**
     * Set number
     *
     * @param integer $number
     */
    public function setNumber($number) {
        $this->number = $number;
    }

    /**
     * Get number
     *
     * @return integer 
     */
    public function getNumber() {
        return $this->number;
    }

    /**
     * Set description
     *
     * @param text $description
     */
    public function setDescription($description) {
        $this->description = $description;
    }

    /**
     * Get description
     *
     * @return text 
     */
    public function getDescription() {
        return $this->description;
    }

    /**
     * Set priority
     *
     * @param integer $priority
     */
    public function setPriority($priority) {
        $this->priority = $priority;
    }

    /**
     * Get priority
     *
     * @return integer 
     */
    public function getPriority() {
        return $this->priority;
    }

    /**
     * Set charge
     *
     * @param integer $charge
     */
    public function setCharge($charge) {
        $this->charge = $charge;
    }

    /**
     * Get charge
     *
     * @return integer 
     */
    public function getCharge() {
        return $this->charge;
    }

    /**
     * Set start_date
     *
     * @param date $startDate
     */
    public function setStartDate($startDate) {
        $this->start_date = $startDate;
    }

    /**
     * Get start_date
     *
     * @return date 
     */
    public function getStartDate() {
        return $this->start_date;
    }

    /**
     * Set end_date
     *
     * @param date $endDate
     */
    public function setEndDate($endDate) {
        $this->end_date = $endDate;
    }

    /**
     * Get end_date
     *
     * @return date 
     */
    public function getEndDate() {
        return $this->end_date;
    }

    /**
     * Set project
     *
     * @param Pasa\RequirementBundle\Entity\Project $project
     */
    public function setProject(\Pasa\RequirementBundle\Entity\Project $project) {
        $this->project = $project;
    }

    /**
     * Get project
     *
     * @return Pasa\RequirementBundle\Entity\Project 
     */
    public function getProject() {
        return $this->project;
    }

    /**
     * Add progression
     *
     * @param Pasa\RequirementBundle\Entity\Progression $progression
     */
    public function addProgression(\Pasa\RequirementBundle\Entity\Progression $progression) {
        $this->progression[] = $progression;
    }

    /**
     * Get progressions
     *
     * @return Doctrine\Common\Collections\Collection 
     */
    public function getProgressions() {
        return $this->progressions;
    }

    public function __toString() {
        return $this->functionality;
    }

}