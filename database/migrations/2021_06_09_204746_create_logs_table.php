<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLogsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        Schema::create('logs', function ( $table) {
            $table->increments('id');
            $table->string('Log');
            
            $table->bigInteger('ref');
            $table->string('from');
            $table->string('to');
            $table->string('subject');
            $table->boolean('rev')->nullable();
            $table->date('issue_date');
            $table->string('internal_submitted_to')->nullable();
            $table->date('internal_submitted_date')->nullable();
            $table->date('internal_returned_date')->nullable();
            $table->date('Returned_Date')->nullable();


           
            
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
        Schema::dropIfExists('logs');
    }
}
