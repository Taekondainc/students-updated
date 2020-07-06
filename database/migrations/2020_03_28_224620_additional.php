<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Additional extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        schema::create("additioncontent", function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->text("uid");
            $table->text("cname");
            $table->text("lectureid");
            $table->text("lecture");
            $table->text("contentName"); 
            $table->text("content");
            $table->text("Cdesc");
            $table->longText("date");
            $table->timestamps();
        });//  
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
