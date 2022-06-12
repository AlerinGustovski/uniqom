<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/admin/models' => [[['_route' => 'models_page', '_controller' => 'App\\Controller\\AdminController::modelsAction'], null, null, null, false, false, null]],
        '/admin/users' => [[['_route' => 'users_page', '_controller' => 'App\\Controller\\AdminController::usersAction'], null, null, null, false, false, null]],
        '/admin/stamps' => [[['_route' => 'stamps_page', '_controller' => 'App\\Controller\\AdminController::stampsAction'], null, null, null, false, false, null]],
        '/register' => [[['_route' => 'app_register', '_controller' => 'App\\Controller\\RegistrationController::register'], null, null, null, false, false, null]],
        '/login' => [[['_route' => 'app_login', '_controller' => 'App\\Controller\\SecurityController::login'], null, null, null, false, false, null]],
        '/logout' => [[['_route' => 'app_logout', '_controller' => 'App\\Controller\\SecurityController::logout'], null, null, null, false, false, null]],
        '/' => [[['_route' => 'index_page', '_controller' => 'App\\Controller\\indexController::indexAction'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/admin/(?'
                    .'|model/([^/]++)(?'
                        .'|(*:34)'
                    .')'
                    .'|delete_(?'
                        .'|model/([^/]++)(*:66)'
                        .'|stamp/([^/]++)(*:87)'
                    .')'
                    .'|stamp/([^/]++)(?'
                        .'|(*:112)'
                    .')'
                .')'
                .'|/_error/(\\d+)(?:\\.([^/]++))?(*:150)'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        34 => [
            [['_route' => 'edit_model', '_controller' => 'App\\Controller\\AdminController::editModel'], ['id'], ['GET' => 0], null, false, true, null],
            [['_route' => 'edit_save_model', '_controller' => 'App\\Controller\\AdminController::editSaveModel'], ['id'], ['POST' => 0], null, false, true, null],
        ],
        66 => [[['_route' => 'delete_model', '_controller' => 'App\\Controller\\AdminController::deleteModel'], ['id'], ['GET' => 0], null, false, true, null]],
        87 => [[['_route' => 'delete_stamp', '_controller' => 'App\\Controller\\AdminController::deleteStamp'], ['id'], ['GET' => 0], null, false, true, null]],
        112 => [
            [['_route' => 'edit_stamp', '_controller' => 'App\\Controller\\AdminController::editStamp'], ['id'], ['GET' => 0], null, false, true, null],
            [['_route' => 'edit_save_stamp', '_controller' => 'App\\Controller\\AdminController::editSaveStamp'], ['id'], ['POST' => 0], null, false, true, null],
        ],
        150 => [
            [['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
