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
        Schema::create('branch', function (Blueprint $table) {
            $table->id('branch_id');
            $table->unsignedBigInteger('staff_id'); // Foreign key column
            $table->foreign('staff_id')->references('staff_id')->on('staff');
            $table->unsignedBigInteger('manager_id'); // Foreign key column
            $table->foreign('manager_id')->references('manager_id')->on('manager');
            $table->string('branch_name')->nullable();
            $table->string('address')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('branch');
    }
};
