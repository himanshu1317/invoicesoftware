<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBillingAddressesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('billing_addresses', function (Blueprint $table) {
            $table->id(); // Auto-increment primary key
            $table->foreignId('customer_id')->constrained()->onDelete('cascade'); // Foreign key referencing customers table
            $table->string('street_address'); // Street address
            $table->string('city'); // City
            $table->string('state')->nullable(); // State (nullable)
            $table->string('postal_code'); // Postal or zip code
            $table->string('country'); // Country
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
        Schema::dropIfExists('billing_addresses');
    }
}
