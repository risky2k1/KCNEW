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
        Schema::create('binhluans', function (Blueprint $table) {
            $table->increments('id');
            $table->string('noidung');
            $table->string('ngaydang');
            $table->string('id_user');
            
           
        
            $table->integer('id_tintuc')->unsigned();
            

            $table->foreign('id_tintuc')->references('id')->on('tintucs');
           
            
            
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
        Schema::dropIfExists('binhluans');
    }
};
