<?php

namespace App\Http\Controllers;

use App\Utils\SessionManager;
use Doctrine\ORM\EntityManager;
use Laravel\Lumen\Routing\Controller as BaseController;

class Controller extends BaseController
{
    private $entityManager;
    private $sessionManager;

    /**
     * Controller constructor.
     * @param $entityManager
     */
    public function __construct(EntityManager $entityManager)
    {
        $this->entityManager = $entityManager;
        $this->sessionManager = SessionManager::getSession();
    }

    /**
     * @return EntityManager
     */
    public function getEntityManager(): EntityManager
    {
        return $this->entityManager;
    }

    /**
     * @return SessionManager
     */
    public function getSessionManager(): SessionManager
    {
        return $this->sessionManager;
    }


}
