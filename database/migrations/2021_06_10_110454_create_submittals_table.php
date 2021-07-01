<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSubmittalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('submittals', function ($table) {
        
            $table->increments('ref');
            $table->string('type');
            
            $table->string('name');
            $table->bigInteger('number');
            
            
            $table->boolean('rev')->nullable();
            $table->date('issue_date');
            $table->date('Returned_Date')->nullable();
            $table->string('action')->nullable();
            $table->string('refernces')->nullable();
            
           
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('submittals');
    }
}
