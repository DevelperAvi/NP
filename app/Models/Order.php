<?php

// app/Models/Order.php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $fillable = [
        'description',
        'orderpdfpath',
        'is_active',
        'create_date',
        'update_date',
        'create_user',
    ];

    public $timestamps = true;
}

