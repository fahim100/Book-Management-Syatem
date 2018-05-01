<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    protected $fillable = [
        'name',
        'description',
        'price',
        'author',
        'uesr_id'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */

    public function books(){
        return $this-> hasMany('App\Book');
    }

    public function users(){
        return $this-> belongsTo('App\User');
    }

}
