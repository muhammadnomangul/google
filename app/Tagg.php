<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tagg extends Model
{
    //

    protected $fillable = [
        'name',
        'created_at',
        'updated_at'
    ];

    public function uploads(){
        return $this->belongsToMany('App\Upload','upload_tag' )->withTimestamps();

    }
}

