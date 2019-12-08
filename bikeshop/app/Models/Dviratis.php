<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Dviratis extends Model
{
  public function userBuying(){
    return $this->belongsTo('App\User', 'user_id');
  }


  public function getKaina()
  {
    return  $this->kaina;
  }
}
