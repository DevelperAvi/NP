<?php

// database/migrations/xxxx_xx_xx_create_cityinformation_table.php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCityinformationTable extends Migration
{
    public function up()
    {
        Schema::create('city_information', function (Blueprint $table) {
            $table->id();
            $table->string('area');
            $table->integer('population');
            $table->integer('male');
            $table->integer('female');
            $table->string('language');
            $table->string('villages');
            $table->timestamps();
            $table->string('created_by')->nullable();  // to track the user who created the record
            $table->string('updated_by')->nullable();  // to track the user who updated the record
        });
    }

    public function down()
    {
        Schema::dropIfExists('cityin_formation');
    }
}

