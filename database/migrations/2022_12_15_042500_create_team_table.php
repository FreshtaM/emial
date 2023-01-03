<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTeamTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('team', function (Blueprint $table) {
            $table->id();
            $table->string('firstname');
            $table->string('lastname');
            $table->binary('image')->nullable();
            $table->text('email');
            $table->string('phone');
            $table->text('position')->nullable();
            $table->text('education')->nullable();
            $table->text('experience')->nullable();
            $table->text('linkedin')->nullable();
            $table->text('github')->nullable();
            $table->text('medium')->nullable();
            $table->text('kaggle')->nullable();
            $table->text('biography')->nullable();
            $table->integer('category_id')->nullable();
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
        Schema::dropIfExists('team');
    }
}
