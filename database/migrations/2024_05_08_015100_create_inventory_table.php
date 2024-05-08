<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('inventory', function (Blueprint $table) {
            $table->id('inventory_id');
            $table->unsignedBigInteger('supplier_id'); // Foreign key column
            $table->foreign('supplier_id')->references('supplier_id')->on('supplier');
            $table->unsignedBigInteger('medicine_id'); // Foreign key column
            $table->foreign('medicine_id')->references('medicine_id')->on('medicines');
            $table->string('purchase_date')->nullable();
            $table->string('quantity')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('inventory');
    }
};
