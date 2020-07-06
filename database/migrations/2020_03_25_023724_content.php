<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Content extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        schema::create("coursecontent", function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->text("cname");
            $table->text("content");
            $table->text("Cdesc");
            $table->text("lecturer");
            $table->longText("date");
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
        //
    }
}
