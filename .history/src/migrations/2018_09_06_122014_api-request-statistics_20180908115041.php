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
            $table->string('name');
            $table->string('request_url');
            $table->longText('header');
            $table->longText('request_payload');
            $table->longText('server');
            $table->longText('response');
            $table->double('duration',8,2);
            $table->enum('type', ['api', 'http']);
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
        Schema::dropIfExists('request_statistics');
    }
}
