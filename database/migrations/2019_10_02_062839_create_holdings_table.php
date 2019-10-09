<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHoldingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('holdings', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->date('Date')->nullable();
            $table->string('Holding_Name')->nullable();
            $table->string('Code_Units')->nullable();
            $table->unsignedMediumInteger('Registered_Units')->nullable();
            $table->unsignedMediumInteger('Available_Units')->nullable();
            $table->unsignedMediumInteger('Reversed_Units')->nullable();
            $table->decimal('Purchase_Price')->nullable();
            $table->decimal('Total_Value')->nullable();




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
        Schema::dropIfExists('holdings');
    }
}
