<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Estudyantes extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         Schema::create('estudyantes', function (Blueprint $table) {
            $table->increments('id');
            $table->string('fname', 50);
            $table->string('mname', 50)->nullable();
            $table->string('lname', 50);
            $table->string('course', 50);
            $table->integer('student_no');
            $table->integer('contact_no');
            $table->timestamps();
            $table->softDeletes();
             });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        
    }
}
