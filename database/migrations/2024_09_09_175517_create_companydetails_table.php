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
        Schema::create('companydetails', function (Blueprint $table) {
            $table->id();
            $table->string('companyname');
            $table->string('companyregistrationnumber');
            $table->string('email');
            $table->string('phonenumber');
            $table->string('location');
            $table->string('pincode');
            $table->text('description');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('companydetails');
    }
};
