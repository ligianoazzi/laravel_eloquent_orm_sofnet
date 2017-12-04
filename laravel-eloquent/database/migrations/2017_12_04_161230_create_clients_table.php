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
            $table->timestamps();            
        });
            }
    // os campos null


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
