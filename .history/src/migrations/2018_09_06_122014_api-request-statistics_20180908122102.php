<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ApiRequestStatistics extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('request_statistics', function (Blueprint $table) {
            $table->increments('id');
            $table->string('route');
            $table->string('request_url');
            $table->longText('header');
            $table->longText('request_payload')->nullable();
            $table->longText('server')->nullable();
            $table->longText('response')->nullable();
            $table->double('duration',8,2)->nullable();
            $table->enum('type', ['api', 'http']);
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
        Schema::dropIfExists('request_statistics');
    }
}
