<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/account' => [[['_route' => 'account', '_controller' => 'App\\Controller\\AccountController::index'], null, ['GET' => 0, 'POST' => 1], null, true, false, null]],
        '/account/reset' => [[['_route' => 'passwordReset', '_controller' => 'App\\Controller\\AccountController::editAction'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/admin' => [[['_route' => 'admin_dasboard', '_controller' => 'App\\Controller\\AdminController::index'], null, null, null, true, false, null]],
        '/admin/afficheAll' => [[['_route' => 'afficheall', '_controller' => 'App\\Controller\\AdminController::affichier'], null, null, null, false, false, null]],
        '/admin/pdf/espace/download' => [[['_route' => 'user_pdf', '_controller' => 'App\\Controller\\AdminController::packPdf'], null, null, null, false, false, null]],
        '/banned' => [[['_route' => 'banned', '_controller' => 'App\\Controller\\BannedController::index'], null, null, null, false, false, null]],
        '/' => [[['_route' => 'app_landing_page', '_controller' => 'App\\Controller\\LandingPageController::index'], null, null, null, false, false, null]],
        '/register' => [[['_route' => 'app_register', '_controller' => 'App\\Controller\\RegistrationController::register'], null, null, null, false, false, null]],
        '/verify/email' => [[['_route' => 'app_verify_email', '_controller' => 'App\\Controller\\RegistrationController::verifyUserEmail'], null, null, null, false, false, null]],
        '/registerVeterinaire' => [[['_route' => 'register_vet', '_controller' => 'App\\Controller\\RegistrationController::registerVetrrinaire'], null, null, null, false, false, null]],
        '/registeremploye' => [[['_route' => 'register_emp', '_controller' => 'App\\Controller\\RegistrationController::registeremp'], null, null, null, false, false, null]],
        '/reset-password' => [[['_route' => 'app_forgot_password_request', '_controller' => 'App\\Controller\\ResetPasswordController::request'], null, null, null, false, false, null]],
        '/reset-password/check-email' => [[['_route' => 'app_check_email', '_controller' => 'App\\Controller\\ResetPasswordController::checkEmail'], null, null, null, false, false, null]],
        '/login' => [[['_route' => 'app_login', '_controller' => 'App\\Controller\\SecurityController::login'], null, null, null, false, false, null]],
        '/logout' => [[['_route' => 'app_logout', '_controller' => 'App\\Controller\\SecurityController::logout'], null, null, null, false, false, null]],
        '/_profiler' => [[['_route' => '_profiler_home', '_controller' => 'web_profiler.controller.profiler::homeAction'], null, null, null, true, false, null]],
        '/_profiler/search' => [[['_route' => '_profiler_search', '_controller' => 'web_profiler.controller.profiler::searchAction'], null, null, null, false, false, null]],
        '/_profiler/search_bar' => [[['_route' => '_profiler_search_bar', '_controller' => 'web_profiler.controller.profiler::searchBarAction'], null, null, null, false, false, null]],
        '/_profiler/phpinfo' => [[['_route' => '_profiler_phpinfo', '_controller' => 'web_profiler.controller.profiler::phpinfoAction'], null, null, null, false, false, null]],
        '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/admin/(?'
                    .'|activer/([^/]++)(*:33)'
                    .'|desactiver/([^/]++)(*:59)'
                    .'|email/([^/]++)(*:80)'
                .')'
                .'|/reset\\-password/reset(?:/([^/]++))?(*:124)'
                .'|/_(?'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:163)'
                    .'|wdt/([^/]++)(*:183)'
                    .'|profiler/([^/]++)(?'
                        .'|/(?'
                            .'|search/results(*:229)'
                            .'|router(*:243)'
                            .'|exception(?'
                                .'|(*:263)'
                                .'|\\.css(*:276)'
                            .')'
                        .')'
                        .'|(*:286)'
                    .')'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        33 => [[['_route' => 'activerUser', '_controller' => 'App\\Controller\\AdminController::activerUser'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        59 => [[['_route' => 'desactiverUser', '_controller' => 'App\\Controller\\AdminController::desactiverUser'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        80 => [[['_route' => 'sendMailToUser', '_controller' => 'App\\Controller\\AdminController::sendEmail'], ['email_use'], null, null, false, true, null]],
        124 => [[['_route' => 'app_reset_password', 'token' => null, '_controller' => 'App\\Controller\\ResetPasswordController::reset'], ['token'], null, null, false, true, null]],
        163 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        183 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        229 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        243 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        263 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        276 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        286 => [
            [['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
