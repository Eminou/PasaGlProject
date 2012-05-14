<?php

namespace Pasa\RequirementBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;

/**
 * Pasa\RequirementBundle\Entity\Manager
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class Manager extends User {
    
    // ...
    /**
     * @ORM\OneToMany(targetEntity="Collaborator", mappedBy="manager")
     */
    private $collaborators;

    // ...
    /**
     * @ORM\OneToMany(targetEntity="Project", mappedBy="manager")
     */
    private $projects;

    public function __construct() {
        parent::__construct();

        $this->projects = new ArrayCollection();
        $this->collaborators = new ArrayCollection();
    }

 
    /**
     * Add collaborators
     *
     * @param Pasa\RequirementBundle\Entity\Collaborator $collaborators
     */
    public function addCollaborator(\Pasa\RequirementBundle\Entity\Collaborator $collaborators)
    {
        $this->collaborators[] = $collaborators;
    }

    /**
     * Get collaborators
     *
     * @return Doctrine\Common\Collections\Collection 
     */
    public function getCollaborators()
    {
        return $this->collaborators;
    }

    /**
     * Add projects
     *
     * @param Pasa\RequirementBundle\Entity\Project $projects
     */
    public function addProject(\Pasa\RequirementBundle\Entity\Project $projects)
    {
        $this->projects[] = $projects;
    }

    /**
     * Get projects
     *
     * @return Doctrine\Common\Collections\Collection 
     */
    public function getProjects()
    {
        return $this->projects;
    }
}