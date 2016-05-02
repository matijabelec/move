<?php

namespace app\controllers;

use mako\http\routing\Controller;
use mako\view\ViewFactory;

use app\models\Stadium;

/**
 * Stadium controller.
 */
class StadiumCtrl extends Controller
{
	public function index(ViewFactory $view)
	{
            $stadiums = (new Stadium)->getAll();
            return $view->create('stadium.index', [
                'stadiums' => $stadiums,
            ]);
	}
        
        public function stadium(ViewFactory $view)
	{
            $stadium = new Stadium();
            $stadium->name = 'Slaven Belupo\'s stadium';
            $stadium->place = 'Koprivnica';
            $stadium->save();
	}
        
        public function details(ViewFactory $view, $id)
	{
            $stadium = Stadium::get($id);
            if(!$stadium) {
                $this->response->status(404);
                return $view->create('error.404');
            }
//            $this->response->type('application/json');
//            return $this->response->body($stadium);
            return $view->create('stadium.details', ['stadium' => $stadium]);
	}
        
        public function edit(ViewFactory $view)
	{
            
	}
        
        public function delete()
	{
            
	}
}
