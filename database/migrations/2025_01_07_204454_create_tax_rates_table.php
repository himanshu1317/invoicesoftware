<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTaxRatesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tax_rates', function (Blueprint $table) {
            $table->id(); // Auto-increment primary key
            $table->string('name'); // Name of the tax (e.g., "VAT", "Sales Tax")
            $table->decimal('rate', 5, 2); // Tax rate in percentage (e.g., 10.00 for 10%)
            $table->boolean('is_active')->default(true); // Whether the tax rate is active or not
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
        Schema::dropIfExists('tax_rates');
    }
}
