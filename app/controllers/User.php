<?php

namespace app\controllers;

use mako\http\routing\Controller;
use mako\view\ViewFactory;

use app\models\Stadium;

/**
 * User controller.
 */
class User extends Controller
{
	public function index(ViewFactory $view)
	{
            return $view->create('user.index');
	}
        
        public function create(ViewFactory $view)
	{
            return $view->create('user.create');
	}
        
        public function details(ViewFactory $view)
	{
            return $view->create('user.details');
	}
        
        public function edit(ViewFactory $view)
	{
            return $view->create('user.edit');
	}
        
        public function delete()
	{
            $stadium = new Stadium();
            $stadium->name = 'Slaven Belupo\'s stadium';
            $stadium->place = 'Koprivnica';
            $stadium->save();
	}
}
