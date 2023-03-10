<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_annonces', function (Blueprint $table) {
            $table->id();
            $table->foreignId('annonce_id')->unsigned();
            $table->foreignId('user_id')->unsigned();

            $table->foreign('user_id')->references('id')->on('users')

                ->onDelete('cascade');

            $table->foreign('annonce_id')->references('id')->on('annonces')

                ->onDelete('cascade');
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
        Schema::dropIfExists('user_annonces');
    }
};
