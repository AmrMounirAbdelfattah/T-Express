<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AddMarket extends Model
{
    protected $fillable = [
        'market_name', 'market_image','market_location',
    ];
    public function Categorie(){
        return $this->hasMany('App\AddCategorie');
}
}
