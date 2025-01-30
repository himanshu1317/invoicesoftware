<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInvoiceItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('invoice_items', function (Blueprint $table) {
            $table->id(); // Auto-increment primary key
            $table->foreignId('invoice_id')->constrained()->onDelete('cascade'); // Foreign key referencing invoices table
            $table->foreignId('product_id')->constrained()->onDelete('cascade'); // Foreign key referencing products table
            $table->integer('quantity'); // Quantity of the product in the invoice
            $table->decimal('unit_price', 10, 2); // Price per unit of the product
            $table->decimal('total', 10, 2); // Total cost for the product in the invoice (quantity * unit_price)
            $table->timestamps(); // Created and updated timestamps
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('invoice_items');
    }
}
