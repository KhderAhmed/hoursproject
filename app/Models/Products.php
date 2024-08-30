<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    use HasFactory;

    protected $fillable = [
        'is_visible',
        'description',
        'name',
        'category',
        'imge',
        'quanttay',
        'price',
        'is_futshred',
    ];

}
