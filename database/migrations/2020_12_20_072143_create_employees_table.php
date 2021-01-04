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
            //the morning
            $table->time("attendees");
            $table->time("leaving");
            $table->time("leaveEarly");
            $table->time("late");
            // Afternoon
            $table->time("afternoonAttendance");
            $table->time("afternoonLeaving");
            //cul Salary
            $table->float("salary");
            $table->time("overtime");
            $table->float("overtimeRate");
            $table->integer("allowances");
            $table->enum('absence', ['present', 'absent']);
            $table->smallInteger("abbsentDays");
            $table->float("abbsentRate");
            $table->integer("delay");
            $table->float("advance");
            $table->float("insurances");
            $table->float("tax");
            $table->float("total");
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
