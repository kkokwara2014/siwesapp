<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bankaccount extends Model
{
    
    public function bank(){
        return $this->belongsTo(Bank::class);
    }
}
