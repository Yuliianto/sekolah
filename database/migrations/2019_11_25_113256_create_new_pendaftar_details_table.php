<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNewPendaftarDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (Schema::hasTable('new_pendaftar_details')) {
            Schema::table('new_pendaftar_details',function(){
                $table->foreign('pendaftar_id')->references('id')->on('new_pendaftares');
                $table->integer('xs12');
            });
        }else{
            Schema::dropIfExists('new_pendaftar_details');
            Schema::create('new_pendaftar_details', function (Blueprint $table) {
                $table->bigIncrements('id');
                $table->integer('pendaftar_id');
                $table->integer('pendaftar_detail_type_id');
                $table->integer('pendaftar_account_id');
                $table->integer('xn1')->nullable();
                $table->integer('xn2')->nullable();
                $table->integer('xn3')->nullable();
                $table->integer('xn4')->nullable();
                $table->integer('xn5')->nullable();
                $table->integer('xn6')->nullable();
                $table->integer('xn7')->nullable();
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
                $table->timestamps();
            });
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('new_pendaftar_details');
    }
}
