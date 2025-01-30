<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCustomersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customers', function (Blueprint $table) {
            $table->id(); // Auto-increment primary key
            $table->string('name'); // Customer's full name
            $table->string('email')->unique(); // Customer's email address, must be unique
            $table->string('phone')->nullable(); // Customer's phone number, optional
            $table->text('address')->nullable(); // Customer's billing address, optional
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
        Schema::dropIfExists('customers');
    }
}
