<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'amount',
        'sales_today',
        'sales_yesterday',
        'sales_this_month',
        'sales_last_month',
    ];
}
