<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEmpContactsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('emp_contacts', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('first_name');
            $table->string('last_name');
            $table->string('father_name');
            $table->string('email');
            $table->string('job_title');
            $table->string('city');   
            $table->string('country');  
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('emp_contacts');
    }
}
