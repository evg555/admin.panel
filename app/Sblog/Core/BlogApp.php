<?php

namespace App\Sblog\Core;

class BlogApp
{
    /* @var Registry */
    public static $app;

    public static function getInstance()
    {
        self::$app = Registry::instance();
        self::getParams();

        return self::$app;
    }

    protected static function getParams()
    {
        $params = require CONF . '/params.php';

        if (!empty($params)) {
            foreach ($params as $name => $value) {
                self::$app->setProperty($name, $value);
            }
        }
    }
}
