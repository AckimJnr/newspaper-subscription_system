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
        Schema::create('users', function (Blueprint $table) {
            $table->integer('user_id', true)->unique('user_id');
            $table->string('first_name');
            $table->string('last_name');
            $table->string('username');
            $table->string('email')->index();
            $table->string('company_name')->nullable();
            $table->enum('sex', ['male', 'female']);
            $table->string('password');
            $table->string('account_id')->primary();
            $table->timestamp('email_verified_at')->nullable();
            $table->rememberToken()->index();
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
};
