<?php

namespace Entity;

//use Doctrine\Mapping as ORM;

/**
 * Users
 *
 * @Table(name="users", schema="core")
 * @Entity(repositoryClass="UserRepository")
 */
class Users
{
    /**
     * @var integer
     *
     * @Column(name="id", type="integer", precision=0, scale=0, nullable=false, unique=false)
     * @Id
     * @GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var integer
     *
     * @Column(name="cedula", type="integer", precision=0, scale=0, nullable=false, unique=false)
     */
    private $cedula;

    /**
     * @var string
     *
     * @Column(name="login", type="string", length=255, precision=0, scale=0, nullable=false, unique=false)
     */
    private $login;

    /**
     * @var string
     *
     * @Column(name="password", type="string", length=255, precision=0, scale=0, nullable=false, unique=false)
     */
    private $password;

    /**
     * @var string
     *
     * @Column(name="name", type="string", length=255, precision=0, scale=0, nullable=false, unique=false)
     */
    private $name;

    /**
     * @var string
     *
     * @Column(name="last_name", type="string", length=255, precision=0, scale=0, nullable=false, unique=false)
     */
    private $lastName;

    /**
     * @var integer
     *
     * @Column(name="phone", type="integer", precision=0, scale=0, nullable=false, unique=false)
     */
    private $phone;

    /**
     * @var integer
     *
     * @Column(name="type", type="integer", precision=0, scale=0, nullable=false, unique=false)
     */
    private $type;

    /**
     * @ManyToOne(targetEntity="Position")
     * @JoinColumn(name="position_id", referencedColumnName="id")
     */
    private $position;

    /**
     * @ManyToOne(targetEntity="Department")
     * @JoinColumn(name="department_id", referencedColumnName="id")
     */
    private $department;


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
     * Get cedula
     *
     * @return integer 
     */
    public function getCedula()
    {
        return $this->cedula;
    }

    /**
     * Set login
     *
     * @param string $login
     * @return Users
     */
    public function setLogin($login)
    {
        $this->login = $login;
    
        return $this;
    }

    /**
     * Get login
     *
     * @return string 
     */
    public function getLogin()
    {
        return $this->login;
    }

    /**
     * Set password
     *
     * @param string $password
     * @return Users
     */
    public function setPassword($password)
    {
        $this->password = $password;
    
        return $this;
    }

    /**
     * Get password
     *
     * @return string 
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * Set name
     *
     * @param string $name
     * @return Users
     */
    public function setName($name)
    {
        $this->name = $name;
    
        return $this;
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

    /**
     * Set lastName
     *
     * @param string $lastName
     * @return Users
     */
    public function setLastName($lastName)
    {
        $this->lastName = $lastName;
    
        return $this;
    }

    /**
     * Get lastName
     *
     * @return string 
     */
    public function getLastName()
    {
        return $this->lastName;
    }

    /**
     * Get phone
     *
     * @return integer 
     */
    public function getPhone()
    {
        return $this->phone;
    }

    /**
     * Set phone
     *
     * @param integer $phone
     * @return Users
     */
    public function setPhone($phone)
    {
        $this->phone = $phone;
    
        return $this;
    }

    /**
     * Set type
     *
     * @param integer $type
     * @return Users
     */
    public function setType($type)
    {
        $this->type = $type;
    
        return $this;
    }

    /**
     * Get type
     *
     * @return integer 
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Set position
     *
     * @param Position $position
     * @return Users
     */
    public function setPosition(Position $position = null)
    {
        $this->position = $position;
    
        return $this;
    }
    /**
     * Get position
     *
     * @return Position 
     */
    public function getPosition()
    {
        return $this->position;
    }

    /**
     * Set department
     *
     * @param Department $department
     * @return Users
     */
    public function setDepartment(Department $department = null)
    {
        $this->department = $department;
    
        return $this;
    }
    /**
     * Get department
     *
     * @return Department 
     */
    public function getDepartment()
    {
        return $this->department;
    }
}
