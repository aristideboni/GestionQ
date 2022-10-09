<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLogementsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('logements', function (Blueprint $table) {
            $table->id();
            $table->string('reference', 100);
            $table->string('rue', 20);
            $table->integer('superficie');
            $table->integer('loyer');
            $table->foreignId('quartier_id')->constrained('quartiers');
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
        Schema::table('logements', function(Blueprint $table){
            $table->dropConstrainedForeignId('quartier_id');
        });
        Schema::dropIfExists('logements');
    }
}
