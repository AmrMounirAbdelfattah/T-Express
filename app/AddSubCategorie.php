<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AddSubCategorie extends Model
{
    protected $fillable = [
       'market_selection', 'Categorie_selection', 'SubCategorie_name', 'SubCategorie_image',
    ];
    public function Categorie(){
        return $this->belongsTo('App\AddCategorie');
    }  
        public function Product(){
            return $this->hasMany('App\AddProduct');

    }
}