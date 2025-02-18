<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;

    // Specify the table if it differs from the plural form
    // protected $table = 'customers';

    // Define which attributes are mass assignable
    protected $fillable = ['name','lastname', 'email', 'phone', 'address','organization'];
}
