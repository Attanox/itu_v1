<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Violation extends Model
{
    /**
     * assign table to model.
     *
     * @var table
     */
    protected $table = 'violations';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'happened on', 'happened at',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
         
    ];

    public function users(){
        return $this->belongsToMany('App\Violation', 'user_violation');
    }
}
