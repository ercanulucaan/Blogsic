<?php

$defaultRoutes = [
    ''                      => 'HomeController@index',
    '/anasayfa'             => 'HomeController@index',

    '/hakkimizda'           => 'AboutController@index',

    '/hizmetlerimiz'        => 'ServicesController@index',
    '/hizmetlerimiz/:any'   => 'ServicesController@view',

    '/portfoy'              => 'PortfolioController@index',

    '/haberler'             => 'NewsController@index',
    '/haberler/:any'        => 'NewsController@view',

    '/show/:id'             => 'HomeController@show',
];

$adminRoutes = [
    ''                  => 'Admin\DashboardController@index',
    '/users'            => 'Admin\DashboardController@users',
];

return [
    'default'   => $defaultRoutes,
    'admin'     => $adminRoutes
];
