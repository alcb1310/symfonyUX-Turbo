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
        '/admin' => [[['_route' => 'admin_dashboard', '_controller' => 'App\\Controller\\AdminController::dashboard'], null, null, null, false, false, null]],
        '/cart' => [[['_route' => 'app_cart', '_controller' => 'App\\Controller\\CartController::shoppingCart'], null, null, null, false, false, null]],
        '/cart/_list' => [[['_route' => '_app_cart_list', '_controller' => 'App\\Controller\\CartController::_shoppingCartList'], null, null, null, false, false, null]],
        '/checkout' => [[['_route' => 'app_checkout', '_controller' => 'App\\Controller\\CheckoutController::checkout'], null, null, null, false, false, null]],
        '/confirmation' => [[['_route' => 'app_confirmation', '_controller' => 'App\\Controller\\CheckoutController::confirmation'], null, null, null, false, false, null]],
        '/admin/product' => [[['_route' => 'product_admin_index', '_controller' => 'App\\Controller\\ProductAdminController::index'], null, ['GET' => 0], null, true, false, null]],
        '/admin/product/new' => [[['_route' => 'product_admin_new', '_controller' => 'App\\Controller\\ProductAdminController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/' => [[['_route' => 'app_homepage', '_controller' => 'App\\Controller\\ProductController::index'], null, null, null, false, false, null]],
        '/you-won' => [[['_route' => 'app_product_youwon', '_controller' => 'App\\Controller\\ProductController::youWon'], null, null, null, false, false, null]],
        '/register' => [[['_route' => 'app_register', '_controller' => 'App\\Controller\\RegistrationController::register'], null, null, null, false, false, null]],
        '/admin/review' => [[['_route' => 'review_admin_index', '_controller' => 'App\\Controller\\ReviewAdminController::index'], null, ['GET' => 0], null, true, false, null]],
        '/admin/review/new' => [[['_route' => 'review_admin_new', '_controller' => 'App\\Controller\\ReviewAdminController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/login' => [[['_route' => 'app_login', '_controller' => 'App\\Controller\\SecurityController::login'], null, null, null, false, false, null]],
        '/logout' => [[['_route' => 'app_logout', '_controller' => 'App\\Controller\\SecurityController::logout'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_(?'
                    .'|wdt/([^/]++)(*:24)'
                    .'|profiler/([^/]++)(?'
                        .'|/(?'
                            .'|search/results(*:69)'
                            .'|router(*:82)'
                            .'|exception(?'
                                .'|(*:101)'
                                .'|\\.css(*:114)'
                            .')'
                        .')'
                        .'|(*:124)'
                    .')'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:159)'
                .')'
                .'|/product/([^/]++)(?'
                    .'|/(?'
                        .'|cart(*:196)'
                        .'|reviews(*:211)'
                    .')'
                    .'|(*:220)'
                .')'
                .'|/ca(?'
                    .'|rt/remove/([^/]++)(?:/([^/]++))?(*:267)'
                    .'|tegory/([^/]++)(*:290)'
                .')'
                .'|/admin/(?'
                    .'|product/([^/]++)(?'
                        .'|/edit(*:333)'
                        .'|(*:341)'
                    .')'
                    .'|review/([^/]++)(?'
                        .'|/edit(*:373)'
                        .'|(*:381)'
                    .')'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        24 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        69 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        82 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        101 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        114 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        124 => [[['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null]],
        159 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        196 => [[['_route' => 'app_cart_add_item', '_controller' => 'App\\Controller\\CartController::addItemToCart'], ['id'], ['POST' => 0], null, false, false, null]],
        211 => [[['_route' => 'app_product_reviews', '_controller' => 'App\\Controller\\ProductController::productReviews'], ['id'], null, null, false, false, null]],
        220 => [[['_route' => 'app_product', '_controller' => 'App\\Controller\\ProductController::showProduct'], ['id'], ['GET' => 0], null, false, true, null]],
        267 => [[['_route' => 'app_cart_remove_item', 'colorId' => null, '_controller' => 'App\\Controller\\CartController::removeItemToCart'], ['productId', 'colorId'], ['POST' => 0], null, false, true, null]],
        290 => [[['_route' => 'app_category', '_controller' => 'App\\Controller\\ProductController::index'], ['id'], null, null, false, true, null]],
        333 => [[['_route' => 'product_admin_edit', '_controller' => 'App\\Controller\\ProductAdminController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        341 => [[['_route' => 'product_admin_delete', '_controller' => 'App\\Controller\\ProductAdminController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        373 => [[['_route' => 'review_admin_edit', '_controller' => 'App\\Controller\\ReviewAdminController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        381 => [
            [['_route' => 'review_admin_delete', '_controller' => 'App\\Controller\\ReviewAdminController::delete'], ['id'], ['POST' => 0], null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
