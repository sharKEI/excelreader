<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Quarters extends Model
{
    //Table Relation
    public function excels()
    {
        return $this->hasMany('App\Excels', 'foreign_key', 'quarter_id');
    }
}
