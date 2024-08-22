<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Countdown extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'end_at',
        'status',
    ];

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

    protected $casts = [
        'end_at' => 'datetime',
    ];
}

