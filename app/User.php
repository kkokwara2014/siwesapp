<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'lastname','firstname','othername','regnumber', 'email','phone', 'password','department_id','userimage',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function role(){
        return $this->belongsTo(Role::class);
    }

    public function department(){
        return $this->belongsTo(Department::class);
    }

    public function report()
    {
        return $this->hasMany(Report::class);
    }

    public function logbook()
    {
        return $this->hasMany(Logbook::class);
    }

    public function bankaccount()
    {
        return $this->hasMany(Bankaccount::class);
    }

    public function itcompany()
    {
        return $this->hasMany(Itcompany::class);
    }

    public function assignedto(){
        return $this->hasMany(Assignedto::class);
    }
}
