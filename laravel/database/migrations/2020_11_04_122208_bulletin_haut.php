<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class BulletinHaut extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bulletin_haut', function (Blueprint $table) {
            $table->id();
            $table->timestamps();

            $table->unsignedBigInteger('bulletin_paie_id');
            $table->foreign('bulletin_paie_id')
                ->references('id')
                ->on('bulletin_paie')
                ->onDelete('cascade');

            $table->unsignedBigInteger('bulletin_type_haut_id');
            $table->foreign('bulletin_type_haut_id')
                ->references('id')
                ->on('bulletin_type_haut')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
