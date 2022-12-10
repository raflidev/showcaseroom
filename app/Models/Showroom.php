<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Showroom extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'owner',
        'brand',
        'purchase_date',
        'description',
        'images',
        'status',
        'user_id'
    ];
}
