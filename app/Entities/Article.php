<?php


namespace App\Entities;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="articles")
 */
class Article extends Inherit
{
    /**
     * @ORM\Column(type="text", name="content")
     */
    private $_content;

    /**
     * @ORM\ManyToOne(targetEntity="User")
     * @ORM\JoinColumn(name="user_id",referencedColumnName="id")
     */
    private $_idUser;

    /**
     * Article constructor.
     * @param $_content
     * @param $_idUser
     */
    public function __construct($_content, $_idUser)
    {
        $this->_content = $_content;
        $this->_idUser = $_idUser;
    }

    /**
     * @return mixed
     */
    public function getContent()
    {
        return $this->_content;
    }

    /**
     * @param mixed $content
     */
    public function setContent($content): void
    {
        $this->_content = $content;
    }

    /**
     * @return mixed
     */
    public function getIdUser()
    {
        return $this->_idUser;
    }

    /**
     * @param mixed $idUser
     */
    public function setIdUser($idUser): void
    {
        $this->_idUser = $idUser;
    }


}
