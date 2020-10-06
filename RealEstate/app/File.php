<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class File extends Model
{
    protected $fillable = ['form_id','name','path'];

    public function form()
    {
        return $this->belongsTo('App\Form','form_id');
    }
}



