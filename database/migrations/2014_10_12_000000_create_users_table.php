<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('unique',25);
            $table->string('code',15);
            $table->string('salutation',10);
            $table->string('first_name',25);
            $table->string('middle_name',25);
            $table->string('last_name',25);
            $table->string('full_name',100);
            $table->date('birthday');
            $table->date('start_date');
            $table->date('end_date');
            $table->string('full_name',100);
            $table->string('avatar',100);
            $table->string('username',25)->unique();
            $table->string('email',100);
            $table->string('password');
            $table->string('job_id');
            $table->string('division_id');
            $table->string('department_id');
            $table->string('business_id');
            $table->string('employee_type_id');
            $table->string('enterpise_id');
            $table->string('entity_id');
            $table->string('action_by');
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
