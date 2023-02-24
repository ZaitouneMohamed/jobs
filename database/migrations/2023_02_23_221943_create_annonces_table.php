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
        Schema::create('annonces', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('nature');
            $table->string('salary');
            $table->string('description');
            $table->unsignedBigInteger('company_id')->unsigned();
            $table->foreign('company_id')->references('id')->on('companies')
                ->onDelete('cascade');
            $table->unsignedBigInteger('categorie_id')->unsigned();
            $table->foreign('categorie_id')->references('id')->on('categories')
                ->onDelete('cascade');
            $table->string('responsibility');
            $table->string('qualification');
            $table->string('duration');
            $table->string('niveau_etude');
            $table->integer('visits')->default(0);
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
        Schema::dropIfExists('annonces');
    }
};
