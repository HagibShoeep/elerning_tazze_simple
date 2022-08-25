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
        Schema::create('enrolled_curses', function (Blueprint $table) {

            $table->id();
            $table->foreignId('student_id')->constrained('students');
            $table->foreignId('course_session_id')->constrained('course_sessions')->onUpdate('cascade') ->onDelete('cascade');
            $table->foreignId('statuses_id')->constrained('statuses');
            $table->dateTimeTz('status_date', $precision = 0);
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
        Schema::dropIfExists('enrolled_curses');
    }
};
