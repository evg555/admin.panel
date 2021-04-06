<?php

namespace App\Sblog\Core;

class Registry
{
    use TSingletone;

    protected static $properties = [];

    public function setProperty($name, $value)
    {
        self::$properties[$name] = $value;
    }

    public function getProperty($name)
    {
        if (isset(self::$properties[$name])) {
            $value = self::$properties[$name];
        }

        return $value;
    }

    public function getProperties()
    {
        return self::$properties;
    }
}
