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
        Schema::create('projects', function (Blueprint $table) {
            $table->id('id_project');
            $table->string('name_project');
            $table->text('description_project');
            $table->date('start_date');
            $table->date('date_of_completion');
            $table->unsignedBigInteger('status_id');
            $table->timestamps();
            $table->softDeletes();

            $table->foreign('status_id')->references('id_status')->on('status');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('projects');
    }
};
