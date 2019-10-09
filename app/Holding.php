<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Holding extends Model
{

    protected $guarded=[];

    public function Users(){
        return $this->belongsToMany(User::class);
    }
}
