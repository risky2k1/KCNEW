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
        Schema::create('tintucs', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title');
            $table->string('slug');
            $table->string('tomtat');
            $table->string('noidung');
            $table->string('tacgia');
            $table->string('ngayguibai');
            $table->string('ngayduyet')->nullable();
            $table->integer('luotxem')->default(0);
            $table->integer('danhgia')->default(0);
            $table->string('tag');
            $table->string('hinhanh')->nullable();
            $table->string('video')->nullable();
            $table->integer('trangthai')->default(0);
           
            $table->integer('id_properticategory')->unsigned();
            $table->integer('id_category')->unsigned();

            $table->foreign('id_properticategory')->references('id')->on('properti_categories');
            $table->foreign('id_category')->references('id')->on('categories');
            
            
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
        Schema::dropIfExists('tintucs');
    }
};
