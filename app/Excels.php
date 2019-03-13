<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Excels extends Model
{
    //Table Relation
    public function place()
    {
        return $this->belongsTo('App\Places');
    }

    public function object()
    {
        return $this->belongsTo('App\Objects');
    }
}
