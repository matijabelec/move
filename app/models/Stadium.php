<?php

namespace app\models;

use \mako\database\midgard\ORM;

class Stadium extends ORM
{
    protected $tableName = 'stadiums';
    
    public function getValidationRules() {
        return [
            'name' => ['required', 'min_length:2', 'max_length:50'],
            'place' => ['max_length:80'],
        ];
    }
    
    public function getAll() {
        return $this->builder()->all();
    }
}
