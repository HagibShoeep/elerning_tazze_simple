<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('course_sessions', function (Blueprint $table) {
            $table->id();
            $table->dateTimeTz('start_at', $precision = 0);
            $table->dateTimeTz('end_at', $precision = 0);
            $table->foreignId('course_id')->constrained('courses');
            $table->foreignId('specialization_session_id')->constrained('specialization_sessions');
            $table->decimal('final_grade', $precision = 8, $scale = 2);
            $table->text('cirtifcate_id');
            $table->text('cirtifcate_location');
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
        Schema::dropIfExists('course_sessions');
    }
};
