<?php

namespace ZfcUser\Entity;

interface UserInterface
{
    /**
     * Get id.
     *
     * @return int
     */
    public function getId();

    /**
     * Set id.
     *
     * @param int $id
     * @return UserInterface
     */
    public function setId($id);

    /**
     * Get username.
     *
     * @return string
     */
    //public function getUsername();

    /**
     * Set username.
     *
     * @param string $username
     * @return UserInterface
     */
   // public function setUsername($username);

    /**
     * Get email.
     *
     * @return string
     */
    public function getParentEmail();

    /**
     * Set email.
     *
     * @param string $email
     * @return UserInterface
     */
    public function setParentEmail($email);

    /**
     * Get displayName.
     *
     * @return string
     */
    //public function getDisplayName();
public function getFullname();
    /**
     * Set displayName.
     *
     * @param string $displayName
     * @return UserInterface
     */
    //public function setDisplayName($displayName);
public function setFullname($displayName);
    /**
     * Get password.
     *
     * @return string password
     */
    public function getPassword();

    /**
     * Set password.
     *
     * @param string $password
     * @return UserInterface
     */
    public function setPassword($password);

    /**
     * Get state.
     *
     * @return int
     */
    //public function getState();

    /**
     * Set state.
     *
     * @param int $state
     * @return UserInterface
     */
    //public function setState($state);

}
