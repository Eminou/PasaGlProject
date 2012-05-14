<?php

namespace Pasa\RequirementBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;

/**
 * Pasa\RequirementBundle\Entity\Collaborator
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class Collaborator extends User {

    // ...
    /**
     * @ORM\OneToMany(targetEntity="Progression", mappedBy="collaborator")
     */
    protected $progressions;

    /**
     * @ORM\ManyToOne(targetEntity="Manager", inversedBy="collaborators")
     * @ORM\JoinColumn(name="manager_id", referencedColumnName="id")
     */
    protected $manager;

    public function __construct() {
        parent::__construct();

        $this->progressions = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Set manager
     *
     * @param Pasa\RequirementBundle\Entity\Manager $manager
     */
    public function setManager(\Pasa\RequirementBundle\Entity\Manager $manager) {
        $this->manager = $manager;
    }

    /**
     * Get manager
     *
     * @return Pasa\RequirementBundle\Entity\Manager 
     */
    public function getManager() {
        return $this->manager;
    }

    /**
     * Add progressions
     *
     * @param Pasa\RequirementBundle\Entity\Progression $progressions
     */
    public function addProgression(\Pasa\RequirementBundle\Entity\Progression $progressions) {
        $this->progressions[] = $progressions;
    }

    /**
     * Get progressions
     *
     * @return Doctrine\Common\Collections\Collection 
     */
    public function getProgressions() {
        return $this->progressions;
    }

}