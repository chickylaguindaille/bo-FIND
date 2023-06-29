<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/association/add' => [[['_route' => 'association_add', '_controller' => 'App\\Controller\\AssociationController::associationAdd'], null, null, null, false, false, null]],
        '/association/list' => [[['_route' => 'association_list', '_controller' => 'App\\Controller\\AssociationController::associationList'], null, null, null, false, false, null]],
        '/association/list/change' => [[['_route' => 'association_list_change', '_controller' => 'App\\Controller\\AssociationController::associationListChange'], null, null, null, false, false, null]],
        '/bo/home' => [[['_route' => 'home', '_controller' => 'App\\Controller\\HomeController::home'], null, null, null, false, false, null]],
        '/ville/list' => [[['_route' => 'ville_list', '_controller' => 'App\\Controller\\TownController::villeList'], null, null, null, false, false, null]],
        '/user/list' => [[['_route' => 'user_list', '_controller' => 'App\\Controller\\UserController::userList'], null, null, null, false, false, null]],
        '/ville/list/change' => [[['_route' => 'ville_list_change', '_controller' => 'App\\Controller\\UserController::villeListChange'], null, null, null, false, false, null]],
        '/ville/add' => [[['_route' => 'ville_add', '_controller' => 'App\\Controller\\UserController::villeAdd'], null, null, null, false, false, null]],
        '/_profiler' => [[['_route' => '_profiler_home', '_controller' => 'web_profiler.controller.profiler::homeAction'], null, null, null, true, false, null]],
        '/_profiler/search' => [[['_route' => '_profiler_search', '_controller' => 'web_profiler.controller.profiler::searchAction'], null, null, null, false, false, null]],
        '/_profiler/search_bar' => [[['_route' => '_profiler_search_bar', '_controller' => 'web_profiler.controller.profiler::searchBarAction'], null, null, null, false, false, null]],
        '/_profiler/phpinfo' => [[['_route' => '_profiler_phpinfo', '_controller' => 'web_profiler.controller.profiler::phpinfoAction'], null, null, null, false, false, null]],
        '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/association/(?'
                    .'|([^/]++)(*:31)'
                    .'|patch/([^/]++)(*:52)'
                    .'|delete/([^/]++)(*:74)'
                .')'
                .'|/ville/(?'
                    .'|patch/([^/]++)(*:106)'
                    .'|delete/([^/]++)(*:129)'
                .')'
                .'|/user/(?'
                    .'|patch/([^/]++)(*:161)'
                    .'|delete/([^/]++)(*:184)'
                .')'
                .'|/_(?'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:224)'
                    .'|wdt/([^/]++)(*:244)'
                    .'|profiler/([^/]++)(?'
                        .'|/(?'
                            .'|search/results(*:290)'
                            .'|router(*:304)'
                            .'|exception(?'
                                .'|(*:324)'
                                .'|\\.css(*:337)'
                            .')'
                        .')'
                        .'|(*:347)'
                    .')'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        31 => [[['_route' => 'association_details', '_controller' => 'App\\Controller\\AssociationController::associationDetails'], ['id'], null, null, false, true, null]],
        52 => [[['_route' => 'association_patch', '_controller' => 'App\\Controller\\AssociationController::associationPatch'], ['id'], null, null, false, true, null]],
        74 => [[['_route' => 'association_delete', '_controller' => 'App\\Controller\\AssociationController::villeDelete'], ['id'], null, null, false, true, null]],
        106 => [[['_route' => 'ville_patch', '_controller' => 'App\\Controller\\TownController::villePatch'], ['id'], null, null, false, true, null]],
        129 => [[['_route' => 'ville_delete', '_controller' => 'App\\Controller\\TownController::villeDelete'], ['id'], null, null, false, true, null]],
        161 => [[['_route' => 'user_patch', '_controller' => 'App\\Controller\\UserController::villePatch'], ['id'], null, null, false, true, null]],
        184 => [[['_route' => 'user_delete', '_controller' => 'App\\Controller\\UserController::userDelete'], ['id'], null, null, false, true, null]],
        224 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        244 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        290 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        304 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        324 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        337 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        347 => [
            [['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
