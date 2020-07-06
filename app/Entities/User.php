<?php


namespace App\Entities;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="users")
 */
class User extends Inherit
{
    /**
     * @ORM\Column(type="string", name="pseudo")
     */
    private $_pseudo;

    /**
     * @ORM\Column(type="string", name="password")
     */
    private $_password;

    function __construct($pseudo, $password)
    {
        $this->_pseudo = $pseudo;
        $this->_password = $password;
    }

    /**
     * @return mixed
     */
    public function getPseudo()
    {
        return $this->_pseudo;
    }

    /**
     * @param mixed $pseudo
     */
    public function setPseudo($pseudo): void
    {
        $this->_pseudo = $pseudo;
    }

    /**
     * @return mixed
     */
    public function getPassword()
    {
        return $this->_password;
    }

    /**
     * @param mixed $password
     */
    public function setPassword($password): void
    {
        $this->_password = $password;
    }


}
