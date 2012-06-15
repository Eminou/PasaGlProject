<?php

namespace Pasa\RequirementBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Pasa\RequirementBundle\Entity\Feature
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class Feature
{
    /**
     * @var integer $id
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string $name
     *
     * @ORM\Column(name="name", type="string", length=255)
     */
    private $name;

    // ...
    /**
     * @ORM\ManyToOne(targetEntity="Manager", inversedBy="features")
     * @ORM\JoinColumn(name="manager_id", referencedColumnName="id")
     */
    private $manager;
    
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
     * Set name
     *
     * @param string $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * Get name
     *
     * @return string 
     */
    public function getName()
    {
        return $this->name;
    }
    
    public function getManager() {
        return $this->manager;
    }

    public function setManager($manager) {
        $this->manager = $manager;
    }
    
    public function __toString() {
        return $this->name;
    }

}