<?php

namespace Proxies;

/**
 * THIS CLASS WAS GENERATED BY THE DOCTRINE ORM. DO NOT EDIT THIS FILE.
 */
class PasaRequirementBundleEntityManagerProxy extends \Pasa\RequirementBundle\Entity\Manager implements \Doctrine\ORM\Proxy\Proxy
{
    private $_entityPersister;
    private $_identifier;
    public $__isInitialized__ = false;
    public function __construct($entityPersister, $identifier)
    {
        $this->_entityPersister = $entityPersister;
        $this->_identifier = $identifier;
    }
    /** @private */
    public function __load()
    {
        if (!$this->__isInitialized__ && $this->_entityPersister) {
            $this->__isInitialized__ = true;

            if (method_exists($this, "__wakeup")) {
                // call this after __isInitialized__to avoid infinite recursion
                // but before loading to emulate what ClassMetadata::newInstance()
                // provides.
                $this->__wakeup();
            }

            if ($this->_entityPersister->load($this->_identifier, $this) === null) {
                throw new \Doctrine\ORM\EntityNotFoundException();
            }
            unset($this->_entityPersister, $this->_identifier);
        }
    }
    
    
    public function addCollaborator(\Pasa\RequirementBundle\Entity\Collaborator $collaborators)
    {
        $this->__load();
        return parent::addCollaborator($collaborators);
    }

    public function getCollaborators()
    {
        $this->__load();
        return parent::getCollaborators();
    }

    public function addProject(\Pasa\RequirementBundle\Entity\Project $projects)
    {
        $this->__load();
        return parent::addProject($projects);
    }

    public function getProjects()
    {
        $this->__load();
        return parent::getProjects();
    }

    public function getRoles()
    {
        $this->__load();
        return parent::getRoles();
    }

    public function getFeatures()
    {
        $this->__load();
        return parent::getFeatures();
    }

    public function setFeatures($features)
    {
        $this->__load();
        return parent::setFeatures($features);
    }

    public function getId()
    {
        $this->__load();
        return parent::getId();
    }

    public function setFirstName($firstName)
    {
        $this->__load();
        return parent::setFirstName($firstName);
    }

    public function getFirstName()
    {
        $this->__load();
        return parent::getFirstName();
    }

    public function setLastName($lastName)
    {
        $this->__load();
        return parent::setLastName($lastName);
    }

    public function getLastName()
    {
        $this->__load();
        return parent::getLastName();
    }

    public function setUsername($username)
    {
        $this->__load();
        return parent::setUsername($username);
    }

    public function getUsername()
    {
        $this->__load();
        return parent::getUsername();
    }

    public function setSalt($salt)
    {
        $this->__load();
        return parent::setSalt($salt);
    }

    public function getSalt()
    {
        $this->__load();
        return parent::getSalt();
    }

    public function setPassword($password)
    {
        $this->__load();
        return parent::setPassword($password);
    }

    public function getPassword()
    {
        $this->__load();
        return parent::getPassword();
    }

    public function setEmail($email)
    {
        $this->__load();
        return parent::setEmail($email);
    }

    public function getEmail()
    {
        $this->__load();
        return parent::getEmail();
    }

    public function setIsActive($isActive)
    {
        $this->__load();
        return parent::setIsActive($isActive);
    }

    public function getIsActive()
    {
        $this->__load();
        return parent::getIsActive();
    }

    public function equals(\Symfony\Component\Security\Core\User\UserInterface $user)
    {
        $this->__load();
        return parent::equals($user);
    }

    public function eraseCredentials()
    {
        $this->__load();
        return parent::eraseCredentials();
    }

    public function __toString()
    {
        $this->__load();
        return parent::__toString();
    }

    public function isAccountNonExpired()
    {
        $this->__load();
        return parent::isAccountNonExpired();
    }

    public function isAccountNonLocked()
    {
        $this->__load();
        return parent::isAccountNonLocked();
    }

    public function isCredentialsNonExpired()
    {
        $this->__load();
        return parent::isCredentialsNonExpired();
    }

    public function isEnabled()
    {
        $this->__load();
        return parent::isEnabled();
    }


    public function __sleep()
    {
        return array('__isInitialized__', 'id', 'first_name', 'last_name', 'username', 'salt', 'password', 'email', 'is_active', 'collaborators', 'projects', 'features');
    }

    public function __clone()
    {
        if (!$this->__isInitialized__ && $this->_entityPersister) {
            $this->__isInitialized__ = true;
            $class = $this->_entityPersister->getClassMetadata();
            $original = $this->_entityPersister->load($this->_identifier);
            if ($original === null) {
                throw new \Doctrine\ORM\EntityNotFoundException();
            }
            foreach ($class->reflFields AS $field => $reflProperty) {
                $reflProperty->setValue($this, $reflProperty->getValue($original));
            }
            unset($this->_entityPersister, $this->_identifier);
        }
        
    }
}