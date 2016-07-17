<?php

namespace DoctrineProxies\__CG__\Entity;

/**
 * THIS CLASS WAS GENERATED BY THE DOCTRINE ORM. DO NOT EDIT THIS FILE.
 */
class Users extends \Entity\Users implements \Doctrine\ORM\Proxy\Proxy
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

    /** @private */
    public function __isInitialized()
    {
        return $this->__isInitialized__;
    }

    
    public function getId()
    {
        if ($this->__isInitialized__ === false) {
            return (int) $this->_identifier["id"];
        }
        $this->__load();
        return parent::getId();
    }

    public function getCedula()
    {
        $this->__load();
        return parent::getCedula();
    }

    public function setLogin($login)
    {
        $this->__load();
        return parent::setLogin($login);
    }

    public function getLogin()
    {
        $this->__load();
        return parent::getLogin();
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

    public function setName($name)
    {
        $this->__load();
        return parent::setName($name);
    }

    public function getName()
    {
        $this->__load();
        return parent::getName();
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

    public function getPhone()
    {
        $this->__load();
        return parent::getPhone();
    }

    public function setPhone($phone)
    {
        $this->__load();
        return parent::setPhone($phone);
    }

    public function setType($type)
    {
        $this->__load();
        return parent::setType($type);
    }

    public function getType()
    {
        $this->__load();
        return parent::getType();
    }

    public function setPosition(\Entity\Position $position = NULL)
    {
        $this->__load();
        return parent::setPosition($position);
    }

    public function getPosition()
    {
        $this->__load();
        return parent::getPosition();
    }

    public function setDepartment(\Entity\Department $department = NULL)
    {
        $this->__load();
        return parent::setDepartment($department);
    }

    public function getDepartment()
    {
        $this->__load();
        return parent::getDepartment();
    }

    public function getTypeText()
    {
        $this->__load();
        return parent::getTypeText();
    }

    public function setCedula($cedula)
    {
        $this->__load();
        return parent::setCedula($cedula);
    }

    public function addTicket(\Entity\Ticket $tickets)
    {
        $this->__load();
        return parent::addTicket($tickets);
    }

    public function removeTicket(\Entity\Ticket $tickets)
    {
        $this->__load();
        return parent::removeTicket($tickets);
    }

    public function getTickets()
    {
        $this->__load();
        return parent::getTickets();
    }

    public function getQuestion()
    {
        $this->__load();
        return parent::getQuestion();
    }

    public function getQuestionText()
    {
        $this->__load();
        return parent::getQuestionText();
    }

    public function setQuestion($question)
    {
        $this->__load();
        return parent::setQuestion($question);
    }

    public function setAnswer($answer)
    {
        $this->__load();
        return parent::setAnswer($answer);
    }

    public function getAnswer()
    {
        $this->__load();
        return parent::getAnswer();
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


    public function __sleep()
    {
        return array('__isInitialized__', 'id', 'cedula', 'login', 'password', 'name', 'lastName', 'phone', 'type', 'question', 'answer', 'email', 'position', 'department', 'tickets');
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
            foreach ($class->reflFields as $field => $reflProperty) {
                $reflProperty->setValue($this, $reflProperty->getValue($original));
            }
            unset($this->_entityPersister, $this->_identifier);
        }
        
    }
}