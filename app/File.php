<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class File extends Model
{
  public function quarter()
  {
      return $this->belongsTo('App\Quarters');
  }
  public function updated_by(){
      return $this->belongsTo('App\User' , 'user_id');
  }
}
