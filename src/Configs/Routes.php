<?php
return [
    '/'                     => 'HomeController@index',

    '/hakkimizda'           => 'AboutController@index',

    '/hizmetlerimiz'        => 'ServicesController@index',
    '/hizmetlerimiz/:any'   => 'ServicesController@view',

    '/portfoy'              => 'PortfolioController@index',

    '/haberler'             => 'NewsController@index',
    '/haberler/:any'        => 'NewsController@view',

    '/show/:id'             => 'HomeController@show',
];