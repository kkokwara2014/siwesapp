<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Location extends Model
{
    protected $fillable=['name'];

    public function itcompany(){
        return $this->hasMany(Itcompany::class);
    }
}
