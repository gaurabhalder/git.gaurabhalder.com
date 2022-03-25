<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLogosTable extends Migration
{
    public function up()
    {
        Schema::create('logos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('logo')->nullable();
            $table->integer('priority')->nullable();
            $table->string('status')->nullable();
            $table->timestamps();
        });
    }
}
