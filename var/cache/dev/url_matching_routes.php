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
        '/admin' => [[['_route' => 'admin_dashboard', '_controller' => 'App\\Controller\\Admin\\DashboardController::index'], null, null, null, false, false, null]],
        '/admin/userGestion' => [[['_route' => 'user_gestion', '_controller' => 'App\\Controller\\Admin\\DashboardController::UserGestion'], null, null, null, false, false, null]],
        '/admin/contactGestion' => [[['_route' => 'contact_gestion', '_controller' => 'App\\Controller\\Admin\\DashboardController::ContactGestiton'], null, null, null, false, false, null]],
        '/' => [[['_route' => 'pre_home_page', '_controller' => 'App\\Controller\\BaseController::index'], null, null, null, false, false, null]],
        '/accueil' => [[['_route' => 'home_page', '_controller' => 'App\\Controller\\BaseController::home'], null, null, null, false, false, null]],
        '/combat' => [[['_route' => 'fight_page', '_controller' => 'App\\Controller\\BaseController::fight'], null, null, null, false, false, null]],
        '/contact' => [[['_route' => 'contact', '_controller' => 'App\\Controller\\ContactController::contact'], null, null, null, false, false, null]],
        '/create' => [[['_route' => 'perso', '_controller' => 'App\\Controller\\PersoController::create'], null, null, null, false, false, null]],
        '/inscription' => [[['_route' => 'registration', '_controller' => 'App\\Controller\\RegistrationController::register'], null, null, null, false, false, null]],
        '/inscription/confirmation' => [[['_route' => 'register_confirmation', '_controller' => 'App\\Controller\\RegistrationController::registerConfirmation'], null, null, null, false, false, null]],
        '/regle' => [[['_route' => 'regle', '_controller' => 'App\\Controller\\RegleController::index'], null, null, null, false, false, null]],
        '/connexion' => [[['_route' => 'app_login', '_controller' => 'App\\Controller\\SecurityController::login'], null, null, null, false, false, null]],
        '/deconnexion' => [[['_route' => 'app_logout', '_controller' => 'App\\Controller\\SecurityController::logout'], null, null, null, false, false, null]],
        '/admin-redirect' => [[['_route' => 'admin_redirect', '_controller' => 'App\\Controller\\SecurityController::adminRedirect'], null, null, null, false, false, null]],
        '/user/dashboard' => [[['_route' => 'user_dashboard', '_controller' => 'App\\Controller\\User\\DashboardController::index'], null, null, null, false, false, null]],
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
                .'|/media/cache/resolve/(?'
                    .'|([A-z0-9_-]*)/rc/([^/]++)/(.+)(*:222)'
                    .'|([A-z0-9_-]*)/(.+)(*:248)'
                .')'
                .'|/admin(?'
                    .'|\\#([^/]++)(*:276)'
                    .'|/([^/]++)/delete(*:300)'
                .')'
                .'|/create/([^/]++)/delete(*:332)'
                .'|/inscription/verification\\-email/([^/]++)(*:381)'
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
        222 => [[['_route' => 'liip_imagine_filter_runtime', '_controller' => 'Liip\\ImagineBundle\\Controller\\ImagineController::filterRuntimeAction'], ['filter', 'hash', 'path'], ['GET' => 0], null, false, true, null]],
        248 => [[['_route' => 'liip_imagine_filter', '_controller' => 'Liip\\ImagineBundle\\Controller\\ImagineController::filterAction'], ['filter', 'path'], ['GET' => 0], null, false, true, null]],
        276 => [[['_route' => 'admin_contact_view', '_controller' => 'App\\Controller\\Admin\\DashboardController::view'], ['id'], null, null, false, true, null]],
        300 => [[['_route' => 'admin_contact_delete', '_controller' => 'App\\Controller\\Admin\\DashboardController::delete'], ['id'], null, null, false, false, null]],
        332 => [[['_route' => 'delete', '_controller' => 'App\\Controller\\PersoController::delete'], ['slug'], null, null, false, false, null]],
        381 => [
            [['_route' => 'register_verification_email', '_controller' => 'App\\Controller\\RegistrationController::registerVerificationEmail'], ['token'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
