<?php
/**
 * Created by PhpStorm.
 * User: Dmitriy
 * Date: 25.08.2018
 * Time: 13:37
 */

    namespace engineMVC\config;

//route files

return [

    ' ' => [
        'controller' => 'main',
        'action' => 'index',
    ],

    'account/login' => [
        'controller' => 'account',
        'action' => 'login',
    ],

    'account/register' => [
        'controller' => 'account',
        'action' => 'register',
    ],

    'news/show' => [
        'controller' => 'news',
        'action' => 'show',
    ],
];