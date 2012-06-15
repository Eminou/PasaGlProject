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
     * @ORM\OneToMany(targetEntity="Exigency", mappedBy="collaborator")
     */
    protected $exigencies;

    /**
     * @ORM\ManyToOne(targetEntity="Manager", inversedBy="collaborators")
     * @ORM\JoinColumn(name="manager_id", referencedColumnName="id")
     */
    protected $manager;

    public function __construct() {
        parent::__construct();

        $this->exigencies = new \Doctrine\Common\Collections\ArrayCollection();
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
     * Add exigencies
     *
     * @param Pasa\RequirementBundle\Entity\Progression $exigencies
     */
    public function addProgression(\Pasa\RequirementBundle\Entity\Progression $exigencies) {
        $this->exigencies[] = $exigencies;
    }

    /**
     * Get exigencies
     *
     * @return Doctrine\Common\Collections\Collection 
     */
    public function getExigencies() {
        return $this->exigencies;
    }

    public function getRoles() {
        return array('ROLE_COLLABORATOR');
    }
    
    public function setExigencies($exigencies) {
        $this->exigencies = $exigencies;
    }


}