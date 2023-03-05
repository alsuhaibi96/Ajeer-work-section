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
        Schema::create('preparation_sections', function (Blueprint $table) {
            $table->id();
            $table->string('title');  
            $table->string('sub_title');    
            $table->text('description');    
            $table->string('main_img');    
            $table->string('sub_img_one');    
            $table->string('sub_img_two');    
            $table->string('sub_img_three');    

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
        Schema::dropIfExists('preparation_sections');
    }
};
