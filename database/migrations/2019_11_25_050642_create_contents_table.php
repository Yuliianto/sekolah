<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::dropIfExists('contents');
        Schema::create('contents', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('content_type_id');
            $table->bigInteger('xn1')->nullable();
            $table->bigInteger('xn2')->nullable();
            $table->bigInteger('xn3')->nullable();
            $table->bigInteger('xn4')->nullable();
            $table->bigInteger('xn5')->nullable();
            $table->bigInteger('xn6')->nullable();
            $table->bigInteger('xn7')->nullable();
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
            $table->date('create_at');
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
        Schema::dropIfExists('contents');
    }
}
