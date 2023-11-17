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
        Schema::create('publications', function (Blueprint $table) {
            $table->integer('publication_id', true)->unique('publication_id');
            $table->enum('tag', ['WN', 'NS', 'TN'])->primary();
            $table->string('name')->nullable();
            $table->decimal('price', 10)->nullable();
            $table->string('feature_image')->nullable();
            $table->text('description')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('publications');
    }
};
