<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Invoice extends Model
{
    use HasFactory;

    // Specify the table if it differs from the plural form
    // protected $table = 'invoices';

    // Define which attributes are mass assignable
    protected $fillable = ['customer_id', 'invoice_number', 'invoice_date', 'due_date', 'status', 'total','discount','customer_note'];

    // Relationship with the Customer model (One invoice belongs to one customer)
    public function customer()
    {
        return $this->belongsTo(Customer::class);
    }

    // Relationship with the InvoiceItem model (One invoice can have many invoice items)
    public function invoiceItems()
    {
        return $this->hasMany(InvoiceItem::class);
    }




    public function calculateTotalAmount()
    {
        return $this->invoiceItems->sum('total');
    }
}
