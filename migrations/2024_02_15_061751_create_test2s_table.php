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
        Schema::create('test2s', function (Blueprint $table) {
            $table->id();

            $table->string('name');
            $table->unsignedBigInteger('test2_id')->unique()->index();
            $table->unsignedBigInteger('gender');
            $table->unsignedBigInteger('district');
            $table->unsignedBigInteger('town');
            
            $table->unsignedBigInteger('position');

            $table->float('latitude')->nullable();
            $table->float('longitude')->nullable();
            $table->string('photo')->nullable();


            $table->foreign('gender')
                ->references('gender_id')->on('genders')->onDelete('cascade');
            $table->foreign('district')
            ->references('district_id')->on('district_ids')->onDelete('cascade');
            $table->foreign('town')
            ->references('town_id')->on('towns')->onDelete('cascade');
            $table->foreign('position')
            ->references('position_id')->on('positions')->onDelete('cascade');
            

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('test2s');
    }
};
