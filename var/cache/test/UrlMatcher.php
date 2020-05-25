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
        '/product' => [[['_route' => 'product.index', '_controller' => 'App\\Controller\\ProductController::index'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/add/([^/]++)(*:20)'
                .'|/remove/([^/]++)(*:43)'
                .'|/product/show/([^/]++)(*:72)'
            .')/?$}sD',
    ],
    [ // $dynamicRoutes
        20 => [[['_route' => 'basket.add', '_controller' => 'App\\Controller\\BasketController::add'], ['id'], null, null, false, true, null]],
        43 => [[['_route' => 'basket.remove', '_controller' => 'App\\Controller\\BasketController::remove'], ['id'], null, null, false, true, null]],
        72 => [
            [['_route' => 'product.show', '_controller' => 'App\\Controller\\ProductController::show'], ['id'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
