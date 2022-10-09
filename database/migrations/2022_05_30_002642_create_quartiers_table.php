<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateQuartiersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('quartiers', function (Blueprint $table) {
            $table->id();
            $table->string('LibQuartier', 20);
            $table->foreignId('ville_id')->constrained('villes');
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
        Schema::table('quartiers', function(Blueprint $table){
            $table->dropConstrainedForeignId('ville_id');
        });
        Schema::dropIfExists('quartiers');
    }
}
