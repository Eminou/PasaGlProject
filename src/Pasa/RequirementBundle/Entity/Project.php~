<?php

namespace Pasa\RequirementBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;

/**
 * Pasa\RequirementBundle\Entity\Project
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class Project {

    // ...
    /**
     * @ORM\ManyToOne(targetEntity="Manager", inversedBy="projects")
     * @ORM\JoinColumn(name="manager_id", referencedColumnName="id")
     */
    private $manager;
    
    // ...
    /**
     * @ORM\OneToMany(targetEntity="Exigency", mappedBy="project")
     */
    private $exigencies;

    public function __construct() {
        $this->exigencies = new ArrayCollection();
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
     * @var string $title
     *
     * @ORM\Column(name="title", type="string", length=255)
     */
    private $title;

    /**
     * @var text $description
     *
     * @ORM\Column(name="description", type="text")
     */
    private $description;

    /**
     * Get id
     *
     * @return integer 
     */
    public function getId() {
        return $this->id;
    }

    /**
     * Set title
     *
     * @param string $title
     */
    public function setTitle($title) {
        $this->title = $title;
    }

    /**
     * Get title
     *
     * @return string 
     */
    public function getTitle() {
        return $this->title;
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
     * Set manager
     *
     * @param Pasa\RequirementBundle\Entity\Manager $manager
     */
    public function setManager(\Pasa\RequirementBundle\Entity\Manager $manager)
    {
        $this->manager = $manager;
    }

    /**
     * Get manager
     *
     * @return Pasa\RequirementBundle\Entity\Manager 
     */
    public function getManager()
    {
        return $this->manager;
    }

    /**
     * Add exigencies
     *
     * @param Pasa\RequirementBundle\Entity\Exigency $exigencies
     */
    public function addExigency(\Pasa\RequirementBundle\Entity\Exigency $exigencies)
    {
        $this->exigencies[] = $exigencies;
    }

    /**
     * Get exigencies
     *
     * @return Doctrine\Common\Collections\Collection 
     */
    public function getExigencies()
    {
        return $this->exigencies;
    }
}