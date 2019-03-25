<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Revisions extends Model
{
    //Table Relation
    public function excel(){
        return $this->belongsTo('App\Excels');
    }

    public function updated_by(){
        return $this->belongsTo('App\User', 'user_id');
    }
}
