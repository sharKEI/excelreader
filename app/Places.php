<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Places extends Model
{
    //Table Relation
    public function excels()
    {
        return $this->hasMany('App\Excels', 'foreign_key', 'place_id');
    }
}
