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
        Schema::create('transactions', function (Blueprint $table) {
            $table->id();
            $table->unsignedbiginteger('customer_id');
            $table->string('ref_no')->nullable();
            $table->string('trans_type')->nullable();
            $table->timestamps();

            $table->foreign('customer_id')->references('id')->on('customers')
                ->onDelete('cascade');
     
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('transactions');
    }
};
