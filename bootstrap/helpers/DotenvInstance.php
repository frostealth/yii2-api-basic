<?php

namespace bootstrap\helpers;

use Dotenv\Dotenv;

/**
 * Class DotenvInstance
 *
 * @package bootstrap\helpers
 */
final class DotenvInstance
{
    /** @var \Dotenv\Dotenv */
    protected static $instance;

    /**
     * @return \Dotenv\Dotenv
     */
    public static function get()
    {
        if (!self::$instance) {
            throw new \RuntimeException('Instance of the "Dotenv\Dotenv" has not been set.');
        }

        return self::$instance;
    }

    /**
     * @param Dotenv $instance
     *
     * @return Dotenv
     */
    public static function set(Dotenv $instance)
    {
        self::$instance = $instance;

        return self::$instance;
    }
}
