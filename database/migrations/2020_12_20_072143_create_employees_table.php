<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmployeesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employees', function (Blueprint $table) {
            $table->id();
            $table->string("name");
            $table->smallInteger("age")->unsigned();
            $table->string("address");
            $table->bigInteger('number');
            $table->string("image")->default("default.jpg");
            $table->date("date_employment");
            //cul Salary
            $table->float("salary");
            $table->smallInteger("overtime");
            $table->float("overtimeRate");
            $table->enum('absence', ['present', 'absent']);
            $table->smallInteger("abbsentDays");
            $table->float("abbsentRate");
            $table->float("advance");
            $table->float("insurances");
            $table->float("tax");
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
