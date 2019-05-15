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

    public function quarter()
    {
        return $this->belongsTo('App\Quarters');
    }

    public function revisions(){
        return $this->hasMany('App\Revisions', 'excel_id');
    }
    
    public function updated_by(){
        return $this->belongsTo('App\User' , 'user_id');
    }

    // this is a recommended way to declare event handlers
    public static function boot() {
        parent::boot();

        static::deleting(function($excel) { // before delete() method call this
                $excel->revisions()->delete();
                // do the rest of the cleanup...
        });
    }
}
