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
        Schema::table('orders', function (Blueprint $table) {
            $table->after('total_price', function ($query) {
                $query->double('itemPrice');
                $query->double('subTotalOrderPrice');
                $query->double('totalOrderPrice');
                $query->unsignedBigInteger('couponDiscount');
                $query->string('paymentType');
                $query->integer('cardNumber');
                $query->integer('cardVerificationNumber');
                $query->double('shippingCharges');
            });
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('orders', function (Blueprint $table) {
            //
        });
    }
};
