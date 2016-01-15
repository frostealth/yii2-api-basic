<?php

use bootstrap\helpers\Dotenv;
use yii\helpers\ArrayHelper;

if (!function_exists('dotenv')) {
    /**
     * @return \Dotenv\Dotenv
     */
    function dotenv()
    {
        return Dotenv::instance();
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
        $params = Yii::$app->params;

        return ArrayHelper::keyExists($key, $params) ? ArrayHelper::getValue($params, $key) : $default;
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
            return $default;
        }

        static $map = [
            'true' => true,
            'false' => false,
            'null' => null,
            'empty' => '',
        ];

        $key = strtolower($value);
        $key = ltrim($key, '(');
        $key = rtrim($key, ')');

        $value = isset($map[$key]) ? $map[$key] : $value;

        return $value;
    }
}
