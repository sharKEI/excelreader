<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Objects extends Model
{
    //Table Relation
    public function excels()
    {
        return $this->hasMany('App\Excels', 'object_id');
    }
}
