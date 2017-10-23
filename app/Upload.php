<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Upload extends Model
{
    //
    protected $fillable = [
        'title',
        'description',
        'filename',
        'orignal_filename',
        'created_at',
        'updated_at',
        'mime'

    ];
    public function taggs(){

        return $this->belongsToMany('App\Tagg', 'upload_tag')->withTimestamps();
    }

}
