<?php


namespace App\Entities;


use Doctrine\ORM\Mapping as ORM;
use Doctrine\ORM\Mapping\MappedSuperclass;

/**
 * @MappedSuperclass
 */
class Inherit
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer", name="id")
     * @ORM\GeneratedValue
     */
    private $_id;

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->_id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id): void
    {
        $this->_id = $id;
    }

}
