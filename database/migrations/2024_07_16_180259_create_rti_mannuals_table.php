<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRtiMannualsTable extends Migration
{
    public function up()
    {
        Schema::create('rti_mannuals', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('file_path');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('rti_mannuals');
    }
}
