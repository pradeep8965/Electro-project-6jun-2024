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
        Schema::create('coupons', function (Blueprint $table) {
            $table->id();
            $table->string('coupon_code')->unique();
            $table->string('coupon_value');
            $table->enum('coupon_type', ['percentage', 'fixed']); // Define ENUM values here
            $table->datetime('coupon_expire_start_date'); // Use datetime type
            $table->datetime('coupon_expire_end_date'); // Use datetime type
            $table->integer('usage_limit')->defaultValue(-1)->comment('Usage limit: -1 means unlimited');
            $table->integer('used_count')->defaultValue(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('coupons');
    }
};
