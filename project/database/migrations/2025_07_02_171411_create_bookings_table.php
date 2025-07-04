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
        Schema::create('bookings', function (Blueprint $table) {
            $table->id();    
            $table->integer('user_id')   ;             
            $table->string('composition');
            $table->integer('time_creation')->nullable();
            $table->integer('time_modification')->nullable();
            $table-> string('status');
            $table->boolean('paid');
            $table->text('address')->nullable();
            $table->string('phone')->nullable();
            $table->string('email');
            $table->timestamps();
            $table->text('pay_method');
            $table->integer('amount');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bookings');
    }
};
