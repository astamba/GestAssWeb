<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAssociatiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('AnaAssociati', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('cognome', 50)->default('');
            $table->string('nome', 50)->default('');
            $table->string('indirizzo', 100)->default('');
            $table->string('cap', 5)->default('');
            $table->string('localita', 80)->default('');
            $table->string('provincia', 2)->default('');
            $table->string('ntesserafipsas', 20)->default('');
            $table->string('ntesseraagonista', 20)->default('');
            $table->string('codicefiscale', 16)->default('');
            $table->date('datanascita')->nullable();
            $table->integer('codicegarista')->default(0);
            $table->binary('avatar')->nullable();
            $table->string('nlicenza', 20)->default('');
            $table->date('datascadlicenza')->nullable();
            $table->string('provincianascita', 2)->default('');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('AnaAssociati');
    }
}
