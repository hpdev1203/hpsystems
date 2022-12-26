<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableEnterpiseInfoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('enterpise_info', function (Blueprint $table) {
            $table->id();
            $table->string('code');
            $table->string('name');
            $table->string('uen');
            $table->string('tax_code');
            $table->string('address_01');
            $table->string('address_02');
            $table->string('city');
            $table->string('state');
            $table->string('country');
            $table->string('country_code');
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
        Schema::dropIfExists('enterpise_info');
    }
}
