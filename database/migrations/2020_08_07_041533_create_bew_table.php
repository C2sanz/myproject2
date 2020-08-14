<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBewTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bew', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamps();

            $table->date('date')->nullable();
            $table->string('Name')->nullable();
            $table->float('price')->nullable();
            $table->integer('num')->nullable();
            $table->text('exposition')->nullable();
            
           

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('bew');
    }
}
