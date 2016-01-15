<?php

namespace bootstrap\helpers;

/**
 * Class Dotenv
 *
 * @package bootstrap\helpers
 */
class Dotenv extends \Dotenv\Dotenv
{
    /** @var Dotenv */
    protected static $instance;

    /**
     * @inheritDoc
     */
    public function __construct($path, $file = '.env')
    {
        self::$instance = $this;

        parent::__construct($path, $file);
    }

    /**
     * @return Dotenv
     */
    public static function instance()
    {
        return self::$instance;
    }
}
