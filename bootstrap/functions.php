<?php

use bootstrap\helpers\DotenvInstance;
use yii\helpers\ArrayHelper;

if (!function_exists('dotenv')) {
    /**
     * @return \Dotenv\Dotenv
     */
    function dotenv()
    {
        return DotenvInstance::get();
    }
}

if (!function_exists('param')) {
    /**
     * @param string $key
     * @param mixed  $default
     *
     * @return mixed
     */
    function param($key, $default = null)
    {
        $value = ArrayHelper::getValue(Yii::$app->params, $key, $default);

        return value($value);
    }
}

if (!function_exists('env')) {
    /**
     * @param string $key
     * @param mixed  $default
     *
     * @return mixed
     */
    function env($key, $default = null)
    {
        $value = getenv($key);
        if ($value === false) {
            return value($default);
        }

        static $map = [
            'true' => true,
            'false' => false,
            'null' => null,
            'empty' => '',
        ];

        $key = strtolower($value);
        $key = trim($key, '()');

        $value = isset($map[$key]) ? $map[$key] : $value;

        return $value;
    }
}

if (!function_exists('value')) {
    /**
     * @param mixed $value
     *
     * @return mixed
     */
    function value($value)
    {
        return is_callable($value) ? call_user_func($value) : $value;
    }
}
