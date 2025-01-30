<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePaymentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('payments', function (Blueprint $table) {
            $table->id(); // Auto-increment primary key
            $table->foreignId('invoice_id')->constrained()->onDelete('cascade'); // Foreign key referencing invoices table
            $table->decimal('amount', 10, 2); // Amount paid
            $table->enum('payment_method', ['credit_card', 'paypal', 'bank_transfer', 'cash'])->default('credit_card'); // Payment method
            $table->string('transaction_id')->nullable(); // Optional transaction ID for the payment
            $table->date('payment_date'); // Date when the payment was made
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
        Schema::dropIfExists('payments');
    }
}
