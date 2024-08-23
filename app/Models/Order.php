<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'tracking_code',
        'order_date',
        'status',
        'total_amount',
        'total_items',
    ];
    public function getStatusInPersianAttribute()
    {
        $statuses = [
            'pending'   => 'در انتظار',
            'completed' => 'تکمیل شده',
            'shipped'   => 'ارسال شده',
            'canceled'  => 'لغو شده',
        ];

        return $statuses[$this->status] ?? 'وضعیت نامشخص';
    }
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
