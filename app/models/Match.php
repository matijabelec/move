<?php

namespace app\models;

use \mako\database\midgard\ORM;

class Match extends ORM
{
    protected $tableName = 'matches';
    protected $cast = ['event_time' => 'date'];
    
    public function stadium()
    {
        return $this->hasOne('\app\models\Stadium');
    }
}
