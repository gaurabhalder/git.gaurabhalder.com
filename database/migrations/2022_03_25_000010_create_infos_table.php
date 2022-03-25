<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInfosTable extends Migration
{
    public function up()
    {
        Schema::create('infos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('header');
            $table->string('title');
            $table->string('phone')->nullable();
            $table->string('footer')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }
}
