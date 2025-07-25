<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
   public function up()
{
    Schema::table('cars', function (Blueprint $table) {
        $table->decimal('prix_vente', 10, 2)->nullable()->after('quantity');
    });
}

public function down()
{
    Schema::table('cars', function (Blueprint $table) {
        $table->dropColumn(['quantity', 'prix_vente']);
    });
}

};
