<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Assignedto extends Model
{
    protected $fillable=['user_id','itcompany_id'];
}
