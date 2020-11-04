<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBulletinPaiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::disableForeignKeyConstraints();
        Schema::create('bulletin_paie', function (Blueprint $table) {
            $table->id();
            $table->string('valeur');
            $table->timestamps();

            //foreign key
            //Societe
            $table->unsignedBigInteger('societe_id');
            $table->foreign('societe_id')
                ->references('id')
                ->on('societes');

            //Societe
            $table->unsignedBigInteger('parametre_id');
            $table->foreign('parametre_id')
                ->references('id')
                ->on('parametres');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('bulettin_paies');
    }
}
