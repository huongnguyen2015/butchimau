<?php

namespace ZfcUser\Entity;

class User implements UserInterface
{
    /**
     * @var int
     */
    protected $id;

    /**
     * @var string
     */
    //protected $username;

    /**
     * @var string
     */
    protected $parent_email;

    /**
     * @var string
     */
    //protected $displayName;
protected $fullname;//added new 
    /**
     * @var string
     */
    protected $password;

    /**
     * @var int
     */
    //protected $state;

    /**
     * Get id.
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set id.
     *
     * @param int $id
     * @return UserInterface
     */
    public function setId($id)
    {
        $this->id = (int) $id;
        return $this;
    }

    /**
     * Get username.
     *
     * @return string
     */
   /* public function getUsername()
    {
        return $this->username;
    }
*/
    /**
     * Set username.
     *
     * @param string $username
     * @return UserInterface
     */
    /*public function setUsername($username)
    {
        $this->username = $username;
        return $this;
    }
*/
    /**
     * Get email.
     *
     * @return string
     */
    public function getParentEmail()
    {
        return $this->parent_email;
    }

    /**
     * Set email.
     *
     * @param string $email
     * @return UserInterface
     */
    public function setParentEmail($email)
    {
        $this->parent_email = $email;
        return $this;
    }

    /**
     * Get displayName.
     *
     * @return string
     */
    public function getFullname()
    {
        //return $this->displayName;
		return $this->fullname;
    }

    /**
     * Set displayName.
     *
     * @param string $displayName
     * @return UserInterface
     */
    public function setFullname($displayName)
    {
        //$this->displayName = $displayName;
		$this->fullname = $displayName;
        return $this;
    }

    /**
     * Get password.
     *
     * @return string
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * Set password.
     *
     * @param string $password
     * @return UserInterface
     */
    public function setPassword($password)
    {
        $this->password = $password;
        return $this;
    }

    /**
     * Get state.
     *
     * @return int
     */
/*    public function getState()
    {
        return $this->state;
    }
*/
    /**
     * Set state.
     *
     * @param int $state
     * @return UserInterface
     */
   /* public function setState($state)
    {
        $this->state = $state;
        return $this;
    }
	*/
}
