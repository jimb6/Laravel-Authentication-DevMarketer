<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('students', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamps();
            $table->string('username')->unique();
            $table->string('password');
            $table->string('firstname');
            $table->string('middlename');
            $table->string('lastname');
            $table->string('sex');
            $table->date('dob');
            $table->string('mother_tongue');
            $table->string('religion');
            $table->string('street');
            $table->string('barangay');
            $table->string('municipality');
            $table->string('province');
            $table->string('father');
            $table->string('mother');
            $table->string('guardian_id');
            $table->string('guardian_rel');
            $table->string('guardian_contact');
            $table->rememberToken();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('students');
    }
}
