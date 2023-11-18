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
        
        DB::unprepared('
        CREATE TRIGGER update_referral_count AFTER INSERT ON transactions
        FOR EACH ROW
        BEGIN
            DECLARE referring_customer_id INT;
        
            -- Get the ID of the referring customer
            SET referring_customer_id = (
                SELECT referred_id 
                FROM customers 
                WHERE id = NEW.customer_id
            );
        
            -- Check if the referring customer exists and the referred customer has performed 3 or more transactions
            IF referring_customer_id IS NOT NULL AND (
                SELECT COUNT(*) 
                FROM transactions 
                WHERE customer_id = NEW.customer_id
            ) >= 3 THEN
                UPDATE customers
                SET referral_count = 1
                WHERE id = referring_customer_id;
            END IF;
        END;

        
        ');
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('trigger_update_referral_count');
    }
};
