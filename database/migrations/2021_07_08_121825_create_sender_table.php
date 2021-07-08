<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSenderTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sender', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('country');
            $table->string('email');
            $table->string('address1');
            $table->string('address2');
            $table->string('phone');
            $table->string('website');
            $table->string('registration_number');
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
        Schema::dropIfExists('sender');
    }
}
