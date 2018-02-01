<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLeaveApplicationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('leave_applications', function (Blueprint $table) {
            $table->increments('id');
            $table->string('employee_name');
            $table->date('apply_date');
            $table->date('application_start_date');
            $table->date('application_end_date');
            $table->date('approve_start_date');
            $table->date('approve_end_date');
            $table->date('approve_date');
            $table->string('reason');
            $table->string('approve_by');
            $table->string('leave_type');
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
        Schema::dropIfExists('leave_applications');
    }
}
