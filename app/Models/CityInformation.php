<?php

// app/Models/CityInformation.php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CityInformation extends Model
{
    use HasFactory;

    protected $fillable = [
        'area',
        'population',
        'male',
        'female',
        'language',
        'villages',
        'created_by',
        'updated_by',
    ];
}

