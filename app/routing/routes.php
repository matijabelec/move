<?php

$routes->group(['namespace' => 'app\controllers'], function($routes)
{
	$routes->get('/', 'Index::welcome', 'home');
        
        // User
	$routes->get('/users',              'User::index');
	$routes->get('/user/create',        'User::create');
	$routes->get('/user/{id}',          'User::details')
               ->when(['id' => '[0-9]+']);
        $routes->get('/user/{id}/edit',     'User::edit')
               ->when(['id' => '[0-9]+']);
        $routes->get('/user/{id}/delete',   'User::delete')
               ->when(['id' => '[0-9]+']);
        
        // Stadium
	$routes->get('/stadiums',              'StadiumCtrl::index');
	$routes->get('/stadium/create',        'StadiumCtrl::create');
	$routes->get('/stadium/{id}',          'StadiumCtrl::details')
               ->when(['id' => '[0-9]+']);
        $routes->get('/stadium/{id}/edit',     'StadiumCtrl::edit')
               ->when(['id' => '[0-9]+']);
        $routes->get('/stadium/{id}/delete',   'StadiumCtrl::delete')
               ->when(['id' => '[0-9]+']);
});