<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Testcont extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('testt', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->text("uid");
            $table->text("cname");
       
            $table->text("Testname");
            $table->text("QN");
        
            $table->text("time");
            $table->text("date");
            $table->text("question");
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
