<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Logbook extends Model
{
    protected $fillable=['user_id','title','filename'];

    public function user(){
        return $this->belongsTo(User::class);
    }
}
