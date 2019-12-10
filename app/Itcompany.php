<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Itcompany extends Model
{
    protected $fillable=['user_id','name','address','phone','location_id'];
    

    public function location(){
        return $this->belongsTo(Location::class);
    }

    public function sentto(){
        return $this->hasMany(Sentto::class);
    }
    public function assignedto(){
        return $this->hasMany(Assignedto::class);
    }

    public function user(){
        return $this->belongsTo(User::class);
    }
}
