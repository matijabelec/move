<?php

namespace app\models;

use \mako\database\midgard\ORM;

class User extends ORM
{
    protected $tableName = 'stadiums';
    
    public function getValidationRules() {
        return [
            'username' => ['required', 'min_length:4', 'max_length:30'],
            'password' => ['required'],
            'email'    => ['required', 'email'],
        ];
    }
}
