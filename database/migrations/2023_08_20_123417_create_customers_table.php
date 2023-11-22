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
         Schema::create('customers', function (Blueprint $table) {
             $table->id();
             $table->unsignedBigInteger('referred_id')->nullable();
             $table->string('name');
             $table->string('doc_no')->nullable();
             $table->string('mobile_no')->nullable();
             $table->string('dob')->nullable();
             $table->string('primary_email')->nullable();
             $table->binary('document_images')->nullable();
             $table->integer('transaction_count')->default(0);
             $table->integer('referral_count')->default(0);

              // New column for transaction count
     
             $table->timestamps();
     
             $table->foreign('referred_id')->references('id')->on('customers')
                 ->onDelete('cascade');
         });
     
       
     }
     
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('customers');
    }
};
