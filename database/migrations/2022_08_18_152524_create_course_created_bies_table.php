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
        Schema::create('course_created_bies', function (Blueprint $table) {
            $table->id();
            $table->foreignId('instaititution_id')->constrained('instaititutions')->onUpdate('cascade')->onDelete('cascade');
            $table->foreignId('course_id')->constrained('course_details')->onUpdate('cascade')->onDelete('cascade');
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
        Schema::dropIfExists('course_created_bies');
    }
};
