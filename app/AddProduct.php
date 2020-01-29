<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AddProduct extends Model
{
    protected $fillable = [
        'market_selection', 'Categorie_selection','SubCategorie_selection', 'Product_name', 'Product_price','Product_image','Product_description',
    ];
    public function SubCategorie(){
        return $this->belongsTo('App\AddSubCategorie');
}
}