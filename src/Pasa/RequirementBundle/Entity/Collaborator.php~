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
class Collaborator {

    // ...
    /**
     * @ORM\OneToMany(targetEntity="Progression", mappedBy="collaborator")
     */
    private $progressions;

    /**
     * @ORM\ManyToOne(targetEntity="Manager", inversedBy="collaborators")
     * @ORM\JoinColumn(name="manager_id", referencedColumnName="id")
     */
    private $manager;

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
     * Set progression
     *
     * @param Pasa\RequirementBundle\Entity\Progression $progression
     */
    public function setProgression(\Pasa\RequirementBundle\Entity\Progression $progression) {
        $this->progression = $progression;
    }

    /**
     * Get progression
     *
     * @return Pasa\RequirementBundle\Entity\Progression 
     */
    public function getProgression() {
        return $this->progression;
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