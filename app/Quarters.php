<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Quarters extends Model
{
    //Table Relation
    public function excels()
    {
        return $this->hasMany('App\Excels', 'quarter_id');
    }
}
