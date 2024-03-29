<?php

$routes->group(['namespace' => 'app\controllers'], function($routes)
{
	$routes->get('/', 'Index::welcome', 'home');
        
        // User
	$routes->get('/users', 'User::index', 'users_index');
	$routes->methods(['GET', 'POST'], '/user/create', 'User::create');
	$routes->methods(['GET', 'POST'], '/user/{id}', 'User::details', 'user_details')->when(['id' => '[0-9]+']);
        $routes->methods(['GET', 'POST'], '/user/{id}/edit', 'User::edit')->when(['id' => '[0-9]+']);
        $routes->get('/user/{id}/delete', 'User::delete')->when(['id' => '[0-9]+']);
        
        // Stadium
	$routes->get('/stadiums', 'StadiumCtrl::index', 'stadiums_index');
	$routes->methods(['GET', 'POST'], '/stadium/create', 'StadiumCtrl::create');
	$routes->methods(['GET', 'POST'], '/stadium/{id}', 'StadiumCtrl::details', 'stadium_details')->when(['id' => '[0-9]+']);
        $routes->methods(['GET', 'POST'], '/stadium/{id}/edit', 'StadiumCtrl::edit')->when(['id' => '[0-9]+']);
        $routes->get('/stadium/{id}/delete', 'StadiumCtrl::delete')->when(['id' => '[0-9]+']);
});