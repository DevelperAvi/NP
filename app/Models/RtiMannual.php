<?php

// app/Models/RtiMannual.php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RtiMannual extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'file_path'];
}

