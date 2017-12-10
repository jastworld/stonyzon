<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEmployeeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employees', function (Blueprint $table) {
            $table->increments('employeeId')->unique() -> nullable(false);
            $table->string('firstName') -> nullable(false);
            $table->string('lastName') -> nullable(false);
            $table->string('email')->unique() -> nullable(false);
            $table->string('supervisorId') -> nullable(false);
            //$table->string('designation') -> nullable(false);
            $table->string('password') -> nullable(false);
            $table->rememberToken();
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
        Schema::dropIfExists('employees');
    }
}
