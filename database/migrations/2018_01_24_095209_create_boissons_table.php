<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBoissonsTable extends Migration
{


    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('boissons', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('nom');
            $table->integer('prix');

        });
        Schema::table('ventes', function (Blueprint $table){
            $table->integer('boisson_id')->unsigned()->index();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('boissons');
    }
}
