<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
   
// Migration file
public function up()
{
    Schema::table('invoices', function (Blueprint $table) {
        $table->decimal('discount', 8, 2)->default(0.00); // Add discount field (optional default value)
    });
}

public function down()
{
    Schema::table('invoices', function (Blueprint $table) {
        $table->dropColumn('discount');
    });
}
};
