<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/_profiler' => [[['_route' => '_profiler_home', '_controller' => 'web_profiler.controller.profiler::homeAction'], null, null, null, true, false, null]],
        '/_profiler/search' => [[['_route' => '_profiler_search', '_controller' => 'web_profiler.controller.profiler::searchAction'], null, null, null, false, false, null]],
        '/_profiler/search_bar' => [[['_route' => '_profiler_search_bar', '_controller' => 'web_profiler.controller.profiler::searchBarAction'], null, null, null, false, false, null]],
        '/_profiler/phpinfo' => [[['_route' => '_profiler_phpinfo', '_controller' => 'web_profiler.controller.profiler::phpinfoAction'], null, null, null, false, false, null]],
        '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
        '/basket' => [[['_route' => 'basket', '_controller' => 'App\\Controller\\BasketController::show'], null, null, null, false, false, null]],
        '/clear' => [[['_route' => 'basket.clear', '_controller' => 'App\\Controller\\BasketController::clear'], null, null, null, false, false, null]],
        '/nbarticle' => [[['_route' => 'basket.nbarticle', '_controller' => 'App\\Controller\\BasketController::nbarticle'], null, null, null, false, false, null]],
        '/' => [[['_route' => 'product.index', '_controller' => 'App\\Controller\\ProductController::index'], null, null, null, false, false, null]],
        '/product/exportjson' => [[['_route' => 'product.export.json', '_controller' => 'App\\Controller\\ProductController::exportjson'], null, ['GET' => 0], null, false, false, null]],
        '/product/exportcsv' => [[['_route' => 'product.export.csv', '_controller' => 'App\\Controller\\ProductController::ExportCsv'], null, ['GET' => 0], null, false, false, null]],
        '/login' => [[['_route' => 'app_login', '_controller' => 'App\\Controller\\SecurityController::login'], null, null, null, false, false, null]],
        '/logout' => [[['_route' => 'app_logout', '_controller' => 'App\\Controller\\SecurityController::logout'], null, null, null, false, false, null]],
        '/admin' => [[['_route' => 'easyadmin', '_controller' => 'EasyCorp\\Bundle\\EasyAdminBundle\\Controller\\EasyAdminController::indexAction'], null, null, null, true, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_(?'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:38)'
                    .'|wdt/([^/]++)(*:57)'
                    .'|profiler/([^/]++)(?'
                        .'|/(?'
                            .'|search/results(*:102)'
                            .'|router(*:116)'
                            .'|exception(?'
                                .'|(*:136)'
                                .'|\\.css(*:149)'
                            .')'
                        .')'
                        .'|(*:159)'
                    .')'
                .')'
                .'|/add/([^/]++)(*:182)'
                .'|/remove/([^/]++)(*:206)'
                .'|/product/([a-z0-9\\-]*)\\-([^/]++)(*:246)'
                .'|/change_locale/([^/]++)(*:277)'
            .')/?$}sD',
    ],
    [ // $dynamicRoutes
        38 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        57 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        102 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        116 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        136 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        149 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        159 => [[['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null]],
        182 => [[['_route' => 'basket.add', '_controller' => 'App\\Controller\\BasketController::add'], ['id'], null, null, false, true, null]],
        206 => [[['_route' => 'basket.remove', '_controller' => 'App\\Controller\\BasketController::remove'], ['id'], null, null, false, true, null]],
        246 => [[['_route' => 'product.show', '_controller' => 'App\\Controller\\ProductController::show'], ['slug', 'id'], null, null, false, true, null]],
        277 => [
            [['_route' => 'change_locale', '_controller' => 'App\\Controller\\TranslationController::changeLocale'], ['locale'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
