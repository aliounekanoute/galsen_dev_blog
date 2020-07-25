<?php


namespace App\Utils;


class SessionManager
{

    private static $session;

    /**
     * SessionManager constructor.
     */
    public function __construct()
    {
        session_start();
    }

    public static function getSession() {
        if(self::$session == null) {
            self::$session = new SessionManager();
        }

        return self::$session;
    }

    public function isLogin() {
        $response = false;

        if(!empty($_SESSION)) {
            $response = true;
        }

        return $response;
    }

    public function stop() {
        session_destroy();
    }


}
