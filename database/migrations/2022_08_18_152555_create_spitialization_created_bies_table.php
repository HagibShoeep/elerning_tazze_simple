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
        Schema::create('spitialization_created_bies', function (Blueprint $table) {
            $table->id();
            $table->foreignId('instaititution_id')->constrained('instaititutions');
            $table->foreignId('course_id')->constrained('spitialization_details');
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
        Schema::dropIfExists('spitialization_created_bies');
    }
};
