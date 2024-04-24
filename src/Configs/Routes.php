<?php
// Guest Routes
$routes['/']                    = 'HomeController@index';
$routes['/anasayfa']            = 'HomeController@index';
$routes['/hakkimizda']          = 'AboutController@index';
$routes['/hizmetlerimiz']       = 'ServicesController@index';
$routes['/hizmetlerimiz/:any']  = 'ServicesController@view';
$routes['/portfoy']             = 'PortfolioController@index';
$routes['/haberler']            = 'NewsController@index';
$routes['/haberler/:any']       = 'NewsController@view';

// Admin Routes
$routes['/admin']               = 'Admin\DashboardController@index';
$routes['/admin/reports']       = 'Admin\DashboardController@reports';

return $routes;