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
        Schema::table('user_details', function (Blueprint $table) {
            $table->foreign(['account_id'], 'user_details_ibfk_1')->references(['account_id'])->on('users')->onUpdate('NO ACTION')->onDelete('NO ACTION');
            $table->foreign(['district_code'], 'user_details_ibfk_2')->references(['district_code'])->on('districts')->onUpdate('NO ACTION')->onDelete('NO ACTION');
            $table->foreign(['account_id'], 'fk_user_details_account')->references(['account_id'])->on('users')->onUpdate('NO ACTION')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('user_details', function (Blueprint $table) {
            $table->dropForeign('user_details_ibfk_1');
            $table->dropForeign('user_details_ibfk_2');
            $table->dropForeign('fk_user_details_account');
        });
    }
};
