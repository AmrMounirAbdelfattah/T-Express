<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAddProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('add_products', function (Blueprint $table) {
            $table->bigIncrements('Product_id');
            $table->string('market_selection');
            $table->string('Categorie_selection');
            $table->string('SubCategorie_selection');
            $table->string('Product_name');
            $table->string('Product_price');
            $table->string('Product_image');
            $table->string('Product_description');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('add_products');
    }
}
