<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateConfigurationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('configurations', function (Blueprint $table) {
            $table->id();
            $table->longText("facebook_pixel")->nullable();
            $table->longText("google_analytics")->nullable();
            $table->string("mail_host")->nullable();
            $table->string("mail_port")->nullable();
            $table->string("mail_username")->nullable();
            $table->string("mail_password")->nullable();
            $table->string("mail_from_address")->nullable();
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
        Schema::dropIfExists('configurations');
    }
}
