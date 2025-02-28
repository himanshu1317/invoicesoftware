<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InvoiceItem extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'invoice_id',
        'product_id',
        'product_name',
        'customer_id',
        'quantity',
        'unit_price',
        'itemdiscount',
        'itemdiscount_type',
        'total',
        'amount'
    ];

    public function invoice()
    {
        return $this->belongsTo(Invoice::class, 'invoice_id');
    }
}
