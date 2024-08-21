<?php
// app/Models/ImagePath.php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ImagePath extends Model
{
    use HasFactory;

    // The table associated with the model.
    protected $table = 'image_paths';

    // The attributes that are mass assignable.
    protected $fillable = [
        'imagepath',
        'is_active',
        'createdate',
        'updater',
        'crud_by',
        'description'
    ];

    // The attributes that should be cast to native types.
    protected $casts = [
        'createdate' => 'datetime',
    ];
}

