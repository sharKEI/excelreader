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
    public function updated_by(){
        return $this->belongsTo('App\User', 'user_id');
    }
}
