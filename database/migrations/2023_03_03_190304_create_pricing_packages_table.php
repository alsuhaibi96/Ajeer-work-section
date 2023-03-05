<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pricing_packages', function (Blueprint $table) {
            $table->id();
            $table->string('title');    
            $table->string('price');    
            $table->string('currency');    
            $table->string('period');    
            $table->string('feature_one');    
            $table->string('feature_two');    
            $table->string('feature_three');    
            $table->string('feature_four');    
            $table->string('feature_five');    
            $table->string('feature_six');    
            $table->string('subscribe_label');    

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
        Schema::dropIfExists('pricing_packages');
    }
};
