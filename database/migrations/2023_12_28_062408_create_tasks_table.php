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
        Schema::create('tasks', function (Blueprint $table) {
            $table->id('id_task');
            $table->unsignedBigInteger('project_id');
            $table->string('name_task');
            $table->text('description_task');
            $table->date('deadline_date');
            $table->unsignedBigInteger('status_id');
            $table->timestamps();
            $table->softDeletes();

            $table->foreign('project_id')->references('id_project')->on('projects');
            $table->foreign('status_id')->references('id_status')->on('status');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tasks');
    }
};
