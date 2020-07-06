<?php

namespace App\Http\Controllers;

use Doctrine\ORM\EntityManager;
use Laravel\Lumen\Routing\Controller as BaseController;

class Controller extends BaseController
{
    private $entityManager;

    /**
     * Controller constructor.
     * @param $entityManager
     */
    public function __construct(EntityManager $entityManager)
    {
        $this->entityManager = $entityManager;
    }

    /**
     * @return EntityManager
     */
    public function getEntityManager(): EntityManager
    {
        return $this->entityManager;
    }


}
