<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sentto extends Model
{
    protected $fillable=['user_id','itcompany_id'];

    public function user(){
        return $this->belongsTo(User::class);
    }
    public function itcompany(){
        return $this->belongsTo(Itcompany::class);
    }
}
