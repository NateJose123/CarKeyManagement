<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCarKeysTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('car_keys', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->integer('CarKeyNumber');
            $table->string('CarModel');
            $table->string('CarYear');
            $table->text('AdditionalInfo');    

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('car_keys');
    }
}
