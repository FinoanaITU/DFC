<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBulettinPaiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::disableForeignKeyConstraints();
        Schema::create('bulettin_paies', function (Blueprint $table) {
            $table->id();
            $table->string('valeur');
            $table->timestamps();

            //foreign key
            //bulletin haut
            $table->unsignedBigInteger('bulletin_type_haut_id');
            $table->foreign('bulletin_type_haut_id')
                ->references('id')
                ->on('bulletin_type_haut');

            //bulletin bas
            $table->unsignedBigInteger('bulletin_type_bas_id');
            $table->foreign('bulletin_type_bas_id')
                ->references('id')
                ->on('bulletin_bas_haut');

            //Salaries
            $table->unsignedBigInteger('salaries_id');
            $table->foreign('salaries_id')
                ->references('id')
                ->on('salaries');

            //Salaries
            $table->unsignedBigInteger('parametre_id');
            $table->foreign('parametre_id')
                ->references('id')
                ->on('parametre');
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
