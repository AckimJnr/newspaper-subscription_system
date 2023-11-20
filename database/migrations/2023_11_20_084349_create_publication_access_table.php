<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePublicationAccessTable extends Migration
{
    public function up()
    {
        Schema::create('publication_access', function (Blueprint $table) {
            $table->integer('access_id')->primary();
            $table->string('account_id', 255);
            $table->integer('post_id');
            $table->foreign('account_id')->references('account_id')->on('users');
            $table->foreign('post_id')->references('post_id')->on('posts');
        });
    }

    public function down()
    {
        Schema::dropIfExists('publication_access');
    }
}
