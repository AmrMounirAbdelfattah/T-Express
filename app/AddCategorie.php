<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AddCategorie extends Model
{
    protected $fillable = [
        'market_selection', 'Categorie_name', 'Categorie_image',
    ];
    public function Market(){
        return $this->belongsTo('App\AddMarket');
    }
        public function SubCategorie(){
            return $this->hasMany('App\AddSubCategorie');    

    }
}
