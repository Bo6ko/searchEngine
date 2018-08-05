<?php

use Solver\Config;

// autoloader for all scripts
spl_autoload_register(function ($class) {
    if ($class[0] === '\\') {
        $class = substr($class, 1);
    }
    $file = __DIR__ . '/' . strtr($class, '\\', '/') . '.php';
    if (is_file($file)) {
        include $file;
        return true;
    }
});

// some useful helpers
include __DIR__ . '/helpers.php';

// load config array from INI
Config::load(__DIR__ . '/config.ini');

// singleton helper
class DB
{
    protected static $db;

    /**
     * @return Solver\Db
     */
    public static function get($driver = 'mysql')
    {
        if (static::$db === null) {
            $dsn = $driver . ':host=' . Config::get('db.host') . ';dbname=' . Config::get('db.data') . ';charset=utf8';
            static::$db = new Solver\Db($dsn, Config::get('db.user'), Config::get('db.pass'));
        }

        return static::$db;
    }
}