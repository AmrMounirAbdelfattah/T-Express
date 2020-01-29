<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAddSubCategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('add_sub_categories', function (Blueprint $table) {
            $table->bigIncrements('SubCategorie_id');
            $table->string('market_selection');
            $table->string('Categorie_selection');
            $table->string('SubCategorie_name');
            $table->string('SubCategorie_image');
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
        Schema::dropIfExists('add_sub_categories');
    }
}
