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
        Schema::create('course_details', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('commetment');
          $table->foreignId('spitialization_id')->constrained('spitialization_details');
            $table->text('description');
            $table->decimal('min_grade', $precision = 5, $scale = 2);
            $table->decimal('course_price', $precision = 8, $scale = 2);
            $table->boolean('active');
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
        Schema::dropIfExists('course_details');
    }
};
