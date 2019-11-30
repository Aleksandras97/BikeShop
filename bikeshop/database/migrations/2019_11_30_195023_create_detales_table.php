<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDetalesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detales', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('pavadinimas');
            $table->text('aprasymas');
            $table->integer('kiekis');
            $table->double('kaina');
            $table->string('prekeszenklas');
            $table->string('nuotrauka');
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
        Schema::dropIfExists('detales');
    }
}
