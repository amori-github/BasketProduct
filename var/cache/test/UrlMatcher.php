<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/basket' => [[['_route' => 'basket', '_controller' => 'App\\Controller\\BasketController::show'], null, null, null, false, false, null]],
        '/clear' => [[['_route' => 'basket.clear', '_controller' => 'App\\Controller\\BasketController::clear'], null, null, null, false, false, null]],
        '/nbarticle' => [[['_route' => 'basket.nbarticle', '_controller' => 'App\\Controller\\BasketController::nbarticle'], null, null, null, false, false, null]],
        '/' => [[['_route' => 'product.index', '_controller' => 'App\\Controller\\ProductController::index'], null, null, null, false, false, null]],
        '/login' => [[['_route' => 'app_login', '_controller' => 'App\\Controller\\SecurityController::login'], null, null, null, false, false, null]],
        '/logout' => [[['_route' => 'app_logout', '_controller' => 'App\\Controller\\SecurityController::logout'], null, null, null, false, false, null]],
        '/admin' => [[['_route' => 'easyadmin', '_controller' => 'EasyCorp\\Bundle\\EasyAdminBundle\\Controller\\EasyAdminController::indexAction'], null, null, null, true, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/add/([^/]++)(*:20)'
                .'|/remove/([^/]++)(*:43)'
                .'|/product/([a-z0-9\\-]*)\\-([^/]++)(*:82)'
            .')/?$}sD',
    ],
    [ // $dynamicRoutes
        20 => [[['_route' => 'basket.add', '_controller' => 'App\\Controller\\BasketController::add'], ['id'], null, null, false, true, null]],
        43 => [[['_route' => 'basket.remove', '_controller' => 'App\\Controller\\BasketController::remove'], ['id'], null, null, false, true, null]],
        82 => [
            [['_route' => 'product.show', '_controller' => 'App\\Controller\\ProductController::show'], ['slug', 'id'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
