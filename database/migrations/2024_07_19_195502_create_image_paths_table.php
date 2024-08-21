<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateImagePathsTable extends Migration
{
    public function up()
    {
        Schema::create('image_paths', function (Blueprint $table) {
            $table->id();
            $table->string('imagepath');
            $table->boolean('is_active')->default(true);
            $table->dateTime('createdate');
            $table->string('updater'); // Ensure this is a string if storing usernames
            $table->string('crud_by');
            $table->text('description')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('image_paths');
    }
}

