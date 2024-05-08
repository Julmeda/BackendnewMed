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
        Schema::create('stocks', function (Blueprint $table) {
            $table->id('stock_id');
            $table->unsignedBigInteger('inventory_id'); // Foreign key column
            $table->foreign('inventory_id')->references('inventory_id')->on('inventory');
            $table->unsignedBigInteger('branch_id'); // Foreign key column
            $table->foreign('branch_id')->references('branch_id')->on('branch');
            $table->string('movement_type')->nullable();
            $table->integer('quantity')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('stocks');
    }
};
