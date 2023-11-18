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
        CREATE TRIGGER update_transaction_count AFTER INSERT ON transactions
        FOR EACH ROW
        BEGIN
            DECLARE new_transaction_count INT;
            
            -- Calculate the new transaction count
            SET new_transaction_count = (
                SELECT COUNT(*) 
                FROM transactions t
                WHERE t.customer_id = NEW.customer_id
            );
            
            -- Update the customers table based on the new transaction count
            IF new_transaction_count = 5 THEN
                UPDATE customers
                SET transaction_count = 1
                WHERE id = NEW.customer_id;
            ELSEIF new_transaction_count > 5 THEN
                UPDATE customers
                SET transaction_count = 0
                WHERE id = NEW.customer_id;
            END IF;
        END;
        ');

        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        DB::unprepared('DROP TRIGGER IF EXISTS update_transaction_count');
    }
};
