<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bank extends Model
{
    

    public function bankaccount(){
        return $this->hasMany(Bankaccount::class);
    }
}
