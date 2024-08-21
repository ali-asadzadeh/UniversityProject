<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'category',
        'price',
        'image_path',
        'status',
    ];

    // تعریف Accessor برای ترجمه وضعیت به فارسی
    public function getStatusLabelAttribute()
    {
        $translations = [
            'amazing' => 'شگفت‌انگیز',
            'bestseller' => 'پر فروش',
            'popular' => 'محبوب',
            'hot' => 'داغ‌ترین'
        ];

        return $translations[$this->status] ?? 'نامشخص';
    }
}
