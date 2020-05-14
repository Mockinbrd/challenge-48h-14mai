<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = ['stock'];

    public function categories() {

        return $this->belongsToMany('App\Category');
    }
}
