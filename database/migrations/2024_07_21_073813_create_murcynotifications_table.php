<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMurcynotificationsTable extends Migration
{
    public function up()
    {
        Schema::create('murcynotifications', function (Blueprint $table) {
            $table->id();
            $table->string('description');
            $table->boolean('is_active')->default(true);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('murcynotifications');
    }
}

