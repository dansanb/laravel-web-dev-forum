<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Topic extends Model
{
    
    public function replies()
    {
        return $this->hasMany('App\Reply');
    }
}
