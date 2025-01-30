<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCompaniesTable extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('companies', function (Blueprint $table) {
            $table->id();
            $table->string('name'); // Company name
            $table->string('email')->nullable(); // Email address
            $table->string('phone')->nullable(); // Contact number
            $table->text('address')->nullable(); // Physical address
            $table->string('tax_number')->nullable(); // Tax number (e.g., VAT, GST)
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::dropIfExists('companies');
    }
}
