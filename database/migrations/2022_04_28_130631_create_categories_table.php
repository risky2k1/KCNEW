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
        Schema::create('categories', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title');
            $table->string('slug');
            // $table->integer('soluong')->default(0);
            // $table->string('file')->nullable();
            // $table->integer('trangthai_job')->default(0);
            // $table->longText('diadiem')->nullable();
            // // $table->longText('loaihinhhoatdong')->nullable();
            // // $table->longText('capdo')->nullable();
            // $table->longText('mucthunhap')->nullable();
            // $table->longText('yeucauhocvankinhnghiem')->nullable();
            // $table->longText('chedodaingo')->nullable();
            // $table->longText('lienhe')->nullable();

            // $table->integer('id_capdo')->unsigned();
            // $table->integer('id_loaihinh')->unsigned();

            // $table->foreign('id_capdo')->references('id')->on('tbl_capdo');
            // $table->foreign('id_loaihinh')->references('id')->on('tbl_loaihinhhoatdong');
            
            
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
        Schema::dropIfExists('categories');
    }
};
