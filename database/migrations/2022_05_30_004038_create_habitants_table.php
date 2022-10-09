<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHabitantsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('habitants', function (Blueprint $table) {
            $table->id();
            $table->string('nom', 10);
            $table->string('prenom', 25);
            $table->dateTime('DatNaiss');
            $table->integer('tel');
            /*$table->foreignId('pays_id')->constrained('pays');
            $table->foreignId('ville_id')->constrained('villes');*/
            $table->foreignId('quartier_id')->constrained('quartiers');
            $table->foreignId('logement_id')->constrained('logements');
            
            $table->timestamps();
        });

        Schema::enableForeignKeyConstraints();
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('habitants', function(Blueprint $table){
            /*$table->dropConstrainedForeignId('pays_id');
            $table->dropConstrainedForeignId('ville_id');*/
            $table->dropConstrainedForeignId('quartier_id');
            $table->dropConstrainedForeignId('logement_id');
        });
        Schema::dropIfExists('habitants');
    }
}
