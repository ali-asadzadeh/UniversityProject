<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    // مشخص کردن ویژگی‌های قابل گروهی تنظیم (Mass Assignment)
    protected $fillable = [
        'name',
        'category',
        'price',
        'image_path',
    ];

}

