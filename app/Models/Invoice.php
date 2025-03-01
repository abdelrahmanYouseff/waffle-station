<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Invoice extends Model
{
    use HasFactory;

    protected $table = 'invoice'; // تحديد اسم الجدول

    protected $fillable = [
        'main_product',
        'second_product',
        'booking_date',
        'request_date',
        'additional',
        'fave_sauce',
        'total_price',
        'user_id',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
