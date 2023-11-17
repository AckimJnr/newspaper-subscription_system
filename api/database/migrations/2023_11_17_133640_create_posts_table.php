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
        Schema::create('posts', function (Blueprint $table) {
            $table->integer('post_id', true);
            $table->enum('publication_tag', ['WN', 'NS', 'TN'])->index('publication_tag');
            $table->string('publication_document');
            $table->string('front_page_image')->nullable();
            $table->string('headline')->nullable();
            $table->string('publisher')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('posts');
    }
};
