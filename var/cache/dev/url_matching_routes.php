<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/Admin/homeAdmin' => [[['_route' => 'display_home', '_controller' => 'App\\Controller\\AdminController::indexhome'], null, null, null, false, false, null]],
        '/Admin/profile' => [[['_route' => 'display_profile', '_controller' => 'App\\Controller\\AdminController::indexProfile'], null, null, null, false, false, null]],
        '/Admin/dashboard' => [[['_route' => 'display_dashboard', '_controller' => 'App\\Controller\\AdminController::indexdashboard'], null, null, null, false, false, null]],
        '/Admin/signin' => [[['_route' => 'display_sign-in', '_controller' => 'App\\Controller\\AdminController::indexsignin'], null, null, null, false, false, null]],
        '/Admin/signup' => [[['_route' => 'display_sign-up', '_controller' => 'App\\Controller\\AdminController::indexsignup'], null, null, null, false, false, null]],
        '/Client/home' => [[['_route' => 'app_home', '_controller' => 'App\\Controller\\ClientController::home'], null, null, null, false, false, null]],
        '/Client/header' => [[['_route' => 'app_header', '_controller' => 'App\\Controller\\ClientController::header'], null, null, null, false, false, null]],
        '/Client/Contactus' => [[['_route' => 'app_Contactus', '_controller' => 'App\\Controller\\ClientController::contactus'], null, null, null, false, false, null]],
        '/Client/Aboutus' => [[['_route' => 'app_Aboutus', '_controller' => 'App\\Controller\\ClientController::Aboutus'], null, null, null, false, false, null]],
        '/Client/E404' => [[['_route' => 'app_E404', '_controller' => 'App\\Controller\\ClientController::E404'], null, null, null, false, false, null]],
        '/Client/Actualites' => [[['_route' => 'app_Actualites', '_controller' => 'App\\Controller\\ClientController::Actualites'], null, null, null, false, false, null]],
        '/Client/ActualiteInfo' => [[['_route' => 'app_ActualiteInfo', '_controller' => 'App\\Controller\\ClientController::ActualiteInfo'], null, null, null, false, false, null]],
        '/Client/EspaceClient' => [[['_route' => 'app_EspaceClient', '_controller' => 'App\\Controller\\ClientController::EspaceClient'], null, null, null, false, false, null]],
        '/Client/EspaceVeterinaire' => [[['_route' => 'app_EspaceVeterinaire', '_controller' => 'App\\Controller\\ClientController::EspaceVeterinaire'], null, null, null, false, false, null]],
        '/Client/BilansDesoin' => [[['_route' => 'app_BilansDesoin', '_controller' => 'App\\Controller\\ClientController::BilansDesoin'], null, null, null, false, false, null]],
        '/Client/BilanDesoin' => [[['_route' => 'app_BilanDesoin', '_controller' => 'App\\Controller\\ClientController::BilanDesoin'], null, null, null, false, false, null]],
        '/register' => [[['_route' => 'app_register', '_controller' => 'App\\Controller\\RegistrationController::register'], null, null, null, false, false, null]],
        '/login' => [[['_route' => 'app_login', '_controller' => 'App\\Controller\\SecurityController::login'], null, null, null, false, false, null]],
        '/logout' => [[['_route' => 'app_logout', '_controller' => 'App\\Controller\\SecurityController::logout'], null, null, null, false, false, null]],
        '/user' => [[['_route' => 'app_user_index', '_controller' => 'App\\Controller\\UserController::index'], null, ['GET' => 0], null, true, false, null]],
        '/user/new' => [[['_route' => 'app_user_new', '_controller' => 'App\\Controller\\UserController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/_profiler' => [[['_route' => '_profiler_home', '_controller' => 'web_profiler.controller.profiler::homeAction'], null, null, null, true, false, null]],
        '/_profiler/search' => [[['_route' => '_profiler_search', '_controller' => 'web_profiler.controller.profiler::searchAction'], null, null, null, false, false, null]],
        '/_profiler/search_bar' => [[['_route' => '_profiler_search_bar', '_controller' => 'web_profiler.controller.profiler::searchBarAction'], null, null, null, false, false, null]],
        '/_profiler/phpinfo' => [[['_route' => '_profiler_phpinfo', '_controller' => 'web_profiler.controller.profiler::phpinfoAction'], null, null, null, false, false, null]],
        '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/u(?'
                    .'|ser/([^/]++)(?'
                        .'|(*:27)'
                        .'|/edit(*:39)'
                        .'|(*:46)'
                    .')'
                    .'|ploads/images/(.+)(*:72)'
                .')'
                .'|/_(?'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:111)'
                    .'|wdt/([^/]++)(*:131)'
                    .'|profiler/([^/]++)(?'
                        .'|/(?'
                            .'|search/results(*:177)'
                            .'|router(*:191)'
                            .'|exception(?'
                                .'|(*:211)'
                                .'|\\.css(*:224)'
                            .')'
                        .')'
                        .'|(*:234)'
                    .')'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        27 => [[['_route' => 'app_user_show', '_controller' => 'App\\Controller\\UserController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        39 => [[['_route' => 'app_user_edit', '_controller' => 'App\\Controller\\UserController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        46 => [[['_route' => 'app_user_delete', '_controller' => 'App\\Controller\\UserController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        72 => [[['_route' => 'app_image', '_controller' => 'App\\Controller\\RegistrationController::image'], ['filename'], null, null, false, true, null]],
        111 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        131 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        177 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        191 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        211 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        224 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        234 => [
            [['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
