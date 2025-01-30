<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    // Specify the table if it differs from the plural form
    // protected $table = 'products';

    // Define which attributes are mass assignable
    protected $fillable = ['name', 'description', 'unit_price', 'quantity_in_stock'];
}
