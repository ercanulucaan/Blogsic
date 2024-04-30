<?php
// Default Routes
$routes['/']                            = 'HomeController@index';
$routes['/anasayfa']                    = 'HomeController@index';

// Admin Routes
$routes['/admin']                       = 'Admin\DashboardController@index';
$routes['/admin/dashboard/index']       = 'Admin\DashboardController@index';
$routes['/admin/auth/login']            = 'Admin\AuthController@login';
$routes['/admin/auth/register']         = 'Admin\AuthController@register';
$routes['/admin/auth/forgot_password']  = 'Admin\AuthController@forgot_password';
$routes['/admin/auth/logout']           = 'Admin\AuthController@logout';
$routes['/admin/pages/index']           = 'Admin\PagesController@index';
$routes['/admin/pages/add']             = 'Admin\PagesController@add';
$routes['/admin/pages/edit/:id']        = 'Admin\PagesController@edit';

// Posts Routes
$routes['/:any']                        = 'PageController@view';

return $routes;