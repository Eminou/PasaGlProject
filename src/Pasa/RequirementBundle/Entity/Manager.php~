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
class Manager {
    
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
        $this->projects = new ArrayCollection();
        $this->collaborators = new ArrayCollection();
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
     * @var string $first_name
     *
     * @ORM\Column(name="first_name", type="string", length=255)
     */
    private $first_name;

    /**
     * @var string $last_name
     *
     * @ORM\Column(name="last_name", type="string", length=255)
     */
    private $last_name;

    /**
     * @var string $login
     *
     * @ORM\Column(name="login", type="string", length=255)
     */
    private $login;

    /**
     * @var string $password
     *
     * @ORM\Column(name="password", type="string", length=255)
     */
    private $password;

    /**
     * Get id
     *
     * @return integer 
     */
    public function getId() {
        return $this->id;
    }

    /**
     * Set first_name
     *
     * @param string $firstName
     */
    public function setFirstName($firstName) {
        $this->first_name = $firstName;
    }

    /**
     * Get first_name
     *
     * @return string 
     */
    public function getFirstName() {
        return $this->first_name;
    }

    /**
     * Set last_name
     *
     * @param string $lastName
     */
    public function setLastName($lastName) {
        $this->last_name = $lastName;
    }

    /**
     * Get last_name
     *
     * @return string 
     */
    public function getLastName() {
        return $this->last_name;
    }

    /**
     * Set login
     *
     * @param string $login
     */
    public function setLogin($login) {
        $this->login = $login;
    }

    /**
     * Get login
     *
     * @return string 
     */
    public function getLogin() {
        return $this->login;
    }

    /**
     * Set password
     *
     * @param string $password
     */
    public function setPassword($password) {
        $this->password = $password;
    }

    /**
     * Get password
     *
     * @return string 
     */
    public function getPassword() {
        return $this->password;
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