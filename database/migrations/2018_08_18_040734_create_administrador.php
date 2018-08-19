<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAdministrador extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('administrador', function(Blueprint $table){
            $table->increments('idAdministrador');
            $table->string('email',50)->unique();
            $table->string('password');

           // $table->primary('idAdministrador');

            $table->engine = 'InnoDB';
            $table->charset = 'utf8';
            $table->collation = 'utf8_unicode_ci';
        });
        //
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('administrador');
        //
    }
}
