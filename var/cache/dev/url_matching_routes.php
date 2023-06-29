<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/api/doc.json' => [[['_route' => 'app.swagger', '_controller' => 'nelmio_api_doc.controller.swagger'], null, ['GET' => 0], null, false, false, null]],
        '/api/doc' => [[['_route' => 'app.swagger_ui', '_controller' => 'nelmio_api_doc.controller.swagger_ui'], null, ['GET' => 0], null, false, false, null]],
        '/_profiler' => [[['_route' => '_profiler_home', '_controller' => 'web_profiler.controller.profiler::homeAction'], null, null, null, true, false, null]],
        '/_profiler/search' => [[['_route' => '_profiler_search', '_controller' => 'web_profiler.controller.profiler::searchAction'], null, null, null, false, false, null]],
        '/_profiler/search_bar' => [[['_route' => '_profiler_search_bar', '_controller' => 'web_profiler.controller.profiler::searchBarAction'], null, null, null, false, false, null]],
        '/_profiler/phpinfo' => [[['_route' => '_profiler_phpinfo', '_controller' => 'web_profiler.controller.profiler::phpinfoAction'], null, null, null, false, false, null]],
        '/_profiler/xdebug' => [[['_route' => '_profiler_xdebug', '_controller' => 'web_profiler.controller.profiler::xdebugAction'], null, null, null, false, false, null]],
        '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
        '/admin/offres' => [[['_route' => 'app_admin_offer_list', '_controller' => 'App\\Controller\\Admin\\OfferController::list'], null, ['GET' => 0], null, false, false, null]],
        '/inscription' => [[['_route' => 'app_front_client_registration', '_controller' => 'App\\Controller\\Front\\ClientController::registration'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/connexion' => [[['_route' => 'app_front_client_login', '_controller' => 'App\\Controller\\Front\\ClientController::login'], null, null, null, false, false, null]],
        '/deconnexion' => [[['_route' => 'app_front_client_logout', '_controller' => 'App\\Controller\\Front\\ClientController::logout'], null, null, null, false, false, null]],
        '/mon-profil' => [[['_route' => 'app_front_client_profile', '_controller' => 'App\\Controller\\Front\\ClientController::profile'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/' => [[['_route' => 'app_front_home_home', '_controller' => 'App\\Controller\\Front\\HomeController::home'], null, null, null, false, false, null]],
        '/rechercher' => [[['_route' => 'app_front_home_search', '_controller' => 'App\\Controller\\Front\\HomeController::search'], null, ['GET' => 0], null, false, false, null]],
        '/offres/id/paiment/refus' => [[['_route' => 'app_front_offer_cancelCheckout', '_controller' => 'App\\Controller\\Front\\OfferController::cancelCheckout'], null, ['GET' => 0], null, false, false, null]],
        '/api/token' => [[['_route' => 'api_login_check'], null, null, null, false, false, null]],
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
                .'|/admin/offres/([^/]++)/(?'
                    .'|validation(*:205)'
                    .'|refuser(*:220)'
                .')'
                .'|/bienvenue/([^/]++)(*:248)'
                .'|/offres/([^/]++)(?'
                    .'|(*:275)'
                    .'|/(?'
                        .'|confirmation(*:299)'
                        .'|paiment(?'
                            .'|(*:317)'
                            .'|/confirmation(*:338)'
                        .')'
                    .')'
                .')'
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
        205 => [[['_route' => 'app_admin_offer_validate', '_controller' => 'App\\Controller\\Admin\\OfferController::validate'], ['id'], ['GET' => 0], null, false, false, null]],
        220 => [[['_route' => 'app_admin_offer_denied', '_controller' => 'App\\Controller\\Admin\\OfferController::denied'], ['id'], ['GET' => 0], null, false, false, null]],
        248 => [[['_route' => 'app_front_client_welcome', '_controller' => 'App\\Controller\\Front\\ClientController::welcome'], ['id'], ['GET' => 0], null, false, true, null]],
        275 => [[['_route' => 'app_front_offer_make', '_controller' => 'App\\Controller\\Front\\OfferController::make'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        299 => [[['_route' => 'app_front_offer_confirm', '_controller' => 'App\\Controller\\Front\\OfferController::confirm'], ['id'], ['GET' => 0], null, false, false, null]],
        317 => [[['_route' => 'app_front_offer_checkout', '_controller' => 'App\\Controller\\Front\\OfferController::checkout'], ['id'], ['GET' => 0], null, false, false, null]],
        338 => [
            [['_route' => 'app_front_offer_validateCheckout', '_controller' => 'App\\Controller\\Front\\OfferController::validateCheckout'], ['id'], ['GET' => 0], null, false, false, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
