<?php

return [
    'GET,HEAD <version:v\d+>/<controller>/<id:\d+>' => '<version>/<controller>/view',
    'GET,HEAD <version:v\d+>/<controller>' => '<version>/<controller>/index',
    'PUT,PATCH <version:v\d+>/<controller>/<id:\d+>' => '<version>/<controller>/update',
    'POST <version:v\d+>/<controller>' => '<version>/<controller>/create',
    'DELETE <version:v\d+>/<controller>/<id:\d+>' => '<version>/<controller>/delete',
    'OPTIONS <version:v\d+><controller>/<id:\d+>' => '<version>/<controller>/options',
    'OPTIONS <version:v\d+><controller>' => '<version>/<controller>/options',
];
