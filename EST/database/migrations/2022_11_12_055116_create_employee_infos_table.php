<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Schema;

class CreateEmployeeInfosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employee_infos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('age');
            $table->string('birthdate');
            $table->string('email')->unique();
            $table->string('address');
            $table->string('contactNo');
            $table->string('qualification');
            $table->string('recentResult');
            $table->tinyInteger('jobid')->default(0);
            $table->tinyInteger('deptId')->default(0);

            $table->string('designation');
            $table->string('joindate')->default(date(Carbon::now()));
            $table->string('permanentDate')->default(date(Carbon::now()));
            $table->bigInteger('basicSalary')->default(0);

            $table->string('salaryAmount')->default(0);
            $table->bigInteger('totalLeave')->default(0);
            $table->bigInteger('totalWorkTime')->default(0);
            $table->string('promotionDate')->default(date(Carbon::now()));
            $table->string('creator');

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
        Schema::dropIfExists('employee_infos');
    }
}
