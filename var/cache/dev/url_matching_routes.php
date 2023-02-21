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
        '/mon-compte' => [[['_route' => 'account', '_controller' => 'App\\Controller\\AccountController::index'], null, null, null, false, false, null]],
        '/mon-compte/modifier-mot-de-passe' => [[['_route' => 'account_password', '_controller' => 'App\\Controller\\AccountController::changePassword'], null, null, null, false, false, null]],
        '/mon-compte/adresses' => [[['_route' => 'account_addresses', '_controller' => 'App\\Controller\\AccountController::address'], null, null, null, false, false, null]],
        '/mon-compte/ajouter-adresse' => [[['_route' => 'account_address_add', '_controller' => 'App\\Controller\\AccountController::addAdress'], null, null, null, false, false, null]],
        '/compte/mes-commandes' => [[['_route' => 'account_order', '_controller' => 'App\\Controller\\AccountOrderController::index'], null, null, null, false, false, null]],
        '/admin' => [[['_route' => 'admin', '_controller' => 'App\\Controller\\Admin\\DashboardController::index'], null, null, null, false, false, null]],
        '/mon-panier' => [[['_route' => 'cart', '_controller' => 'App\\Controller\\CartController::index'], null, null, null, false, false, null]],
        '/cart/remove' => [[['_route' => 'cart_remove', '_controller' => 'App\\Controller\\CartController::remove'], null, null, null, false, false, null]],
        '/contact' => [[['_route' => 'contact', '_controller' => 'App\\Controller\\ContactController::index'], null, null, null, false, false, null]],
        '/' => [[['_route' => 'home', '_controller' => 'App\\Controller\\HomeController::index'], null, null, null, false, false, null]],
        '/commande' => [[['_route' => 'order', '_controller' => 'App\\Controller\\OrderController::index'], null, null, null, false, false, null]],
        '/commande/recapitulatif' => [[['_route' => 'order_recap', '_controller' => 'App\\Controller\\OrderController::add'], null, ['POST' => 0, 'GET' => 1], null, false, false, null]],
        '/produits' => [[['_route' => 'products', '_controller' => 'App\\Controller\\ProductController::index'], null, null, null, false, false, null]],
        '/inscription' => [[['_route' => 'register', '_controller' => 'App\\Controller\\RegisterController::index'], null, null, null, false, false, null]],
        '/reinitialisation-mot-de-passe' => [[['_route' => 'reset_password', '_controller' => 'App\\Controller\\ResetPasswordController::index'], null, null, null, false, false, null]],
        '/search' => [[['_route' => 'app_search', '_controller' => 'App\\Controller\\SearchController::index'], null, null, null, false, false, null]],
        '/connexion' => [[['_route' => 'app_login', '_controller' => 'App\\Controller\\SecurityController::login'], null, null, null, false, false, null]],
        '/deconnexion' => [[['_route' => 'app_logout', '_controller' => 'App\\Controller\\SecurityController::logout'], null, null, null, false, false, null]],
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
                    .'|components/([^/]++)(?:/([^/]++))?(*:201)'
                .')'
                .'|/c(?'
                    .'|om(?'
                        .'|pte/mes\\-commandes/([^/]++)(*:247)'
                        .'|mande/(?'
                            .'|merci/([^/]++)(*:278)'
                            .'|erreur/([^/]++)(*:301)'
                            .'|create\\-session/([^/]++)(*:333)'
                        .')'
                    .')'
                    .'|art/(?'
                        .'|add/([^/]++)(*:362)'
                        .'|de(?'
                            .'|lete([^/]++)(*:387)'
                            .'|crease([^/]++)(*:409)'
                        .')'
                    .')'
                .')'
                .'|/produits/([^/]++)(*:438)'
                .'|/modifier\\-mot\\-de\\-passe/([^/]++)(*:480)'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        38 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        57 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        102 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        116 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        136 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        149 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        159 => [[['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null]],
        201 => [[['_route' => 'live_component', 'action' => 'get'], ['component', 'action'], null, null, false, true, null]],
        247 => [[['_route' => 'account_order_show', '_controller' => 'App\\Controller\\AccountOrderController::show'], ['reference'], null, null, false, true, null]],
        278 => [[['_route' => 'order_validate', '_controller' => 'App\\Controller\\OrderController::commandValided'], ['stripeSessionId'], null, null, false, true, null]],
        301 => [[['_route' => 'order_cancel', '_controller' => 'App\\Controller\\OrderController::commandCanceled'], ['stripeSessionId'], null, null, false, true, null]],
        333 => [[['_route' => 'stripe_create_session', '_controller' => 'App\\Controller\\StripeController::index'], ['reference'], null, null, false, true, null]],
        362 => [[['_route' => 'cart_add', '_controller' => 'App\\Controller\\CartController::add'], ['id'], null, null, false, true, null]],
        387 => [[['_route' => 'cart_delete', '_controller' => 'App\\Controller\\CartController::delete'], ['id'], null, null, false, true, null]],
        409 => [[['_route' => 'cart_decrease', '_controller' => 'App\\Controller\\CartController::decrease'], ['id'], null, null, false, true, null]],
        438 => [[['_route' => 'product', '_controller' => 'App\\Controller\\ProductController::show'], ['slug'], null, null, false, true, null]],
        480 => [
            [['_route' => 'update_password', '_controller' => 'App\\Controller\\ResetPasswordController::update'], ['token'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
