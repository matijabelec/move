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
        
        public function create(ViewFactory $view)
	{
            if($this->request->method() == 'POST') {
                $stadium = new Stadium();
                $validator = $this->validator->create($this->request->post(), $stadium->getValidationRules() );
                if($validator->isValid() ) {
                    $stadium->name = $this->request->post('name');
                    $stadium->place = $this->request->post('place');
                    $stadium->save();
                    return $this->response->redirect($this->urlBuilder->toRoute('stadium_details', ['id' => $stadium->id]) );
                }
            }
            return $view->create('stadium.stadium');
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
