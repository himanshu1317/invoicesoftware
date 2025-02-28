<?php


namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Invoice extends Model
{
    use HasFactory;

    protected $fillable = [
        'customer_id',
        'invoice_number',
        'invoice_date',
        'due_date',
        'total_amount',
        'paid_amount',
        'due_amount',
        'status',
        'payment_method',
        'transaction_id',
        'customer_note',
        'termsConditions',
    ];

    // Define relationship with Customer (assuming you have a Customer model)
    public function customer()
    {
        return $this->belongsTo(Customer::class);
    }
    public function items()
    {
        return $this->hasMany(InvoiceItem::class, 'invoice_id');
    }
}
