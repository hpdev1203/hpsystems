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
        Schema::create('companies', function (Blueprint $table) {
            $table->id();
            $table->string('code', 10);
            $table->string('name', 250);
            $table->string('short_name', 25)->nullable();
            $table->string('address_01', 100)->nullable();
            $table->string('address_02', 100)->nullable();
            $table->string('city', 100)->nullable();
            $table->string('state', 100)->nullable();
            $table->string('country', 100)->nullable();
            $table->string('postal_code', 20)->nullable();
            $table->string('telephone', 20)->nullable();
            $table->string('fax', 20)->nullable();
            $table->string('email', 50)->nullable();
            $table->string('website', 20)->nullable();
            $table->longText('description')->nullable();
            $table->unsignedBigInteger('head_staff_id')->nullable();
            $table->foreign('head_staff_id')->references('id')->on('staff');
            $table->timestamps();
        });

        Schema::table('staff', function (Blueprint $table) {
            $table->unsignedBigInteger('company_id');
            $table->foreign('company_id')->references('id')->on('companies');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('companies');
    }
};
