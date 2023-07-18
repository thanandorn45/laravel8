<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFatTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fat', function (Blueprint $table) {
            $table->id();
            $table->timestamps();

            $table->integer('Ash')->nullable();
            $table->float('ioke')->nullable();
            $table->string('Oshi')->nullable();
            $table->date('Diba')->nullable();
            $table->text('MG')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('fat');
    }
}
