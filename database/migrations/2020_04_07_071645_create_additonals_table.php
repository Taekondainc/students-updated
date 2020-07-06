<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAdditonalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('addfiles', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->text("cid");
            $table->text("uid");
            $table->text("cname");
            $table->text("content");
            $table->text("name");
            $table->text("file");
            $table->text("description");
            $table->text("date");
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
        Schema::dropIfExists('additonals');
    }
}
