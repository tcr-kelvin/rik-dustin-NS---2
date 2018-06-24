<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePrepaidsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('prepaids', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name',100);
            $table->longText('description');
            $table->string('sms',40);
            $table->string('callmins',40);
            $table->string('data',40);
            $table->string('price',10);
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
        Schema::dropIfExists('prepaids');
    }
}
