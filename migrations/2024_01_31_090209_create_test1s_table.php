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
        Schema::create('test1s', function (Blueprint $table) {
            $table->id();

            $table->string('name');
            $table->tinyInteger('test1_id')->unique();
            $table->foreign('gender')
                ->references('gender_id')->on('genders')->onDelete('cascade');
            $table->foreign('district')
            ->references('district_id')->on('district_ids')->onDelete('cascade');
            $table->foreign('position')
            ->references('position_id')->on('positions')->onDelete('cascade');
            $table->string('photo')->nullable;


            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('test1s');
    }
};
