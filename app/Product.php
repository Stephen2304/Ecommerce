<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $filllable = ['stock'];
    
    public function getPrice() {
        $price = $this->price;

        return number_format($price, 2, ',', ' ').' Fcfa';
    }

    public function categories() {
        return $this->belongsToMany('App\Category');
    }
}
