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
        Schema::create('staff', function (Blueprint $table) {
            $table->id();
            $table->string('salutation', 10);
            $table->string('staff_code', 15);
            $table->string('gender', 20);
            $table->string('first_name', 25);
            $table->date('date_start')->nullable();
            $table->date('date_cessation')->nullable();
            $table->date('date_of_birth')->nullable();
            $table->string('middle_name', 25)->nullable();
            $table->string('last_name', 25)->nullable();
            $table->string('full_name', 75)->nullable();
            $table->string('personal_email', 50)->nullable();
            $table->string('company_email', 50)->nullable();
            $table->string('avatar')->nullable();
            $table->longText('description')->nullable();
            $table->timestamps();
        });

        Schema::table('users', function (Blueprint $table) {
            $table->unsignedBigInteger('staff_id');
            $table->foreign('staff_id')->references('id')->on('staff');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('staff');
    }
};
