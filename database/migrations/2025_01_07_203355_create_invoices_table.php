<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInvoicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('invoices', function (Blueprint $table) {
            $table->id(); // Auto-increment primary key
            $table->foreignId('customer_id')->constrained()->onDelete('cascade'); // Foreign key referencing customers table
            $table->string('invoice_number')->unique(); // Unique invoice number
            $table->date('invoice_date'); // The date when the invoice was created
            $table->date('due_date'); // The date when the payment is due
            $table->enum('status', ['pending', 'paid', 'overdue'])->default('pending'); // Invoice status
            $table->decimal('total_amount', 10, 2); // The total amount for the invoice
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
        Schema::dropIfExists('invoices');
    }
}
