<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Phoneshopstbl extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('phoneshopstbl', function (Blueprint $table) {
            $table->increments('id');
            $table->string('id_number', 50);
            $table->date('date');
            $table->string('fullname', 50);
            $table->time('timein' );
            $table->time('timeout');
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
