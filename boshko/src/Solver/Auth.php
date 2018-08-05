<?php

namespace Solver;

class Auth
{
    /**
     * @var \Solver\Auth
     */
    private static $instance;

    private function __construct() {}
    private function __clone() {}

    /**
     * @return \Solver\Auth
     */
    public static function getInstance()
    {
        if (static::$instance === null) {
            static::$instance = new self();
        }

        return static::$instance;
    }

    public static function setIdentity($identity)
    {
        if (!isset($_SESSION)) return;

        $_SESSION['identity'] = serialize($identity);
    }

    public static function getIdentity()
    {
        if (!isset($_SESSION)) return null;

        if (isset($_SESSION['identity'])) {
            return unserialize($_SESSION['identity']);
        }

        return null;
    }

    public static function clearIdentity()
    {
        if (!isset($_SESSION)) return;

        unset($_SESSION['identity']);
    }
}