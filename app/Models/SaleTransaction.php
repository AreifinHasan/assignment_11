<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SaleTransaction extends Model
{
    use HasFactory;
    protected $fillable = [
        'product_id',
        'sale_amount',
        'sale_date',
        // Add other fields that can be mass-assigned
    ];
}
