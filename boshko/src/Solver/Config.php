<?php

namespace Solver;

class Config
{
    private static $data = array();

    public static function load($file)
    {
        if (!is_file($file)) {
            return;
        }

        static::$data = parse_ini_file($file, true);
    }

    public static function get($prop = null, $default = null)
    {
        $config = static::$data;

        if ($prop === null) {
            return $config;
        }

        foreach (explode('.', $prop) as $value) {
            if (!isset($config[$value])) {
                return $default;
            }
            $config = &$config[$value];
        }

        return $config;
    }
}