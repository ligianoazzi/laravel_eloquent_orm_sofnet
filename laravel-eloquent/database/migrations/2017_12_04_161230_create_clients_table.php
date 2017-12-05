<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clients', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('document_number');
            $table->string('email');
            $table->string('phone');
            $table->boolean('defaulter'); // inadimplente
            $table->date('date_birth')->nullable();
            $table->char('sex')->nullable(); //m ou f
            $table->smallInteger('marital_status')->nullable();
            $table->string('physical_disability')->nullable(); // deficiencia fisica se a pessoa tiver
            $table->string('company_name')->nullable();
            $table->string('client_type');

            $table->integer('soccer_team_id')->unsigned();
            $table->foreign('soccer_team_id')->references('id')->on('soccer_teams');

            $table->timestamps();         
        });
    }
    // os campos null servem para que eu possa ter os 2 tipos de cliente, PF e PJ
    // many-to-one - muitos para um
    // muitos clientes poderão ter um mesmo time

/*
            $table->integer('soccer_team_id')->unsigned();
            $table->foreign('soccer_team_id')->references('id')->on('soccer_teams');
            // criando o campo e a chave estrangeira

*/            


    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('clients');
    }
}