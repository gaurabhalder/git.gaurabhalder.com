<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePixelsTable extends Migration
{
    public function up()
    {
        Schema::create('pixels', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('pixel_tag')->nullable();
            $table->string('google_analytic')->nullable();
            $table->string('script')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }
}
