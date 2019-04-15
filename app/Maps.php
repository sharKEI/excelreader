<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Maps extends Model
{
    public function updated_by(){
        return $this->belongsTo('App\User', 'user_id');
    }

    public function place()
    {
        return $this->belongsTo('App\Places');
    }
}
