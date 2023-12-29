<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('assignments', function (Blueprint $table) {
            $table->id('id_assignment');
            $table->unsignedBigInteger('task_id');
            $table->unsignedBigInteger('employee_id');
            $table->date('assignment_date');
            $table->unsignedBigInteger('status_id');
            $table->timestamps();
            $table->softDeletes();

            $table->foreign('task_id')->references('id_task')->on('tasks');
            $table->foreign('employee_id')->references('id_employee')->on('employees');
            $table->foreign('status_id')->references('id_status')->on('status');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('assignments');
    }
};
