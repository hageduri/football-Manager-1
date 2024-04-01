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
        Schema::create('players', function (Blueprint $table) {
            $table->id();

            $table->string('fname');
            $table->string('lname');
            $table->tinyInteger('gender');
            $table->smallInteger('position');
            $table->text('address1');
            $table->text('address2');
            $table->tinyInteger('district_id');
            $table->Integer('pin_code');
            $table->string('photo')->nullable(); //file name of the photo
            $table->bigInteger('phone')->unique();
            $table->string('email')->unique();
            $table->bigInteger('aadhar')->unique();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('players');
    }
};
