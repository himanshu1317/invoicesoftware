<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    use HasFactory;

    protected $fillable = [
        'customer_id',
        'invoice_id',
        'amount',
        'paid',
        'balance',
        'status',
        'payment_method',
        'transaction_id',
        'payment_date',
    ];

    // Relationship with Customer
    public function customer()
    {
        return $this->belongsTo(Customer::class);
    }

    // Relationship with Invoice
    public function invoice()
    {
        return $this->belongsTo(Invoice::class);
    }
}
