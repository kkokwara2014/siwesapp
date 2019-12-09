<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Supervision extends Model
{
    protected $fillable=['supervisor_id','student_id'];

    public function supervisor(){
        return $this->belongsTo(User::class);
    }
}
