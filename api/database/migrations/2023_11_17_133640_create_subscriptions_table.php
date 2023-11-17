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
        Schema::create('subscriptions', function (Blueprint $table) {
            $table->integer('subscription_id', true);
            $table->string('account_id');
            $table->timestamp('subscription_date');
            $table->dateTime('expiry_date');
            $table->integer('package_id')->index('package_id');
            $table->bigInteger('active');
            $table->decimal('subscription_total', 10);

            $table->unique(['account_id', 'package_id'], 'unique_subscription');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('subscriptions');
    }
};
