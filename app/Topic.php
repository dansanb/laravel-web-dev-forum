<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Topic extends Model
{
    
    public function forum()
    {
        return $this->belongsTo('App\Forum');
    }

    public function replies()
    {
        return $this->hasMany('App\Reply');
    }
}
