<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInitiatorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('initiators', function (Blueprint $table) {

           
            $table->increments('ref');
            $table->date('date');
            
            $table->string('type');
            $table->bigInteger('no');
            $table->string('name');
            $table->date('required_date');
            $table->string('description')->nullable();
         
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('initiators');
    }
}
