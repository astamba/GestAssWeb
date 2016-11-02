<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAssociazioneTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('AnaAssociazione', function (Blueprint $table) {
            $table->increments('id');
            $table->string('associazione', 100);
            $table->string('indirizzo', 100);
            $table->string('indirizzo2', 100);
            $table->string('cap', 5);
            $table->string('localita', 100);
            $table->string('provincia', 2);
            $table->string('presidente', 80);
            $table->binary('logo');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('AnaAssociazione');
    }
}
