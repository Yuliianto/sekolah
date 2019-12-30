<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNewPendaftaresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::dropIfExists('new_pendaftares');
        Schema::create('new_pendaftares', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('pendaftar_type_id');
            $table->bigInteger('pendaftar_status_id');
            $table->bigInteger('xn1')->nullable();
            $table->bigInteger('xn2')->nullable();
            $table->bigInteger('xn3')->nullable();
            $table->bigInteger('xn4')->nullable();
            $table->bigInteger('xn5')->nullable();
            $table->bigInteger('xn6')->nullable();
            $table->bigInteger('xn7')->nullable();
            $table->bigInteger('xn8')->nullable();
            $table->bigInteger('xn9')->nullable();
            $table->bigInteger('xn10')->nullable();
            $table->bigInteger('xn11')->nullable();
            $table->bigInteger('xn12')->nullable();
            $table->bigInteger('xn13')->nullable();
            $table->bigInteger('xn14')->nullable();
            $table->bigInteger('xn15')->nullable();
            $table->bigInteger('xn16')->nullable();
            $table->bigInteger('xn17')->nullable();
            $table->bigInteger('xn18')->nullable();
            $table->text('xs1')->nullable();
            $table->text('xs2')->nullable();
            $table->text('xs3')->nullable();
            $table->text('xs4')->nullable();
            $table->text('xs5')->nullable();
            $table->text('xs6')->nullable();
            $table->text('xs7')->nullable();
            $table->text('xs8')->nullable();
            $table->text('xs9')->nullable();
            $table->text('xs10')->nullable();
            $table->text('xs11')->nullable();
            $table->text('xs12')->nullable();
            $table->text('xs13')->nullable();
            $table->text('xs14')->nullable();
            $table->text('xs15')->nullable();
            $table->text('xs16')->nullable();
            $table->text('xs17')->nullable();
            $table->text('xs18')->nullable();
            $table->text('xs19')->nullable();
            $table->text('xs20')->nullable();
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
        Schema::dropIfExists('new_pendaftares');
    }
}
