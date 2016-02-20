<?php

use bootstrap\helpers\DotenvInstance as Instance;
use Dotenv\Dotenv;

Instance::set(new Dotenv(dirname(__DIR__)))->load();
