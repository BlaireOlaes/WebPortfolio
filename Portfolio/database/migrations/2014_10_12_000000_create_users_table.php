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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('fullName')->default('Blaire James Olaes');
            $table->string('section')->default('AI31');
            $table->string('contact')->default('0915 280 5633');
            $table->string('email')->default('blaireolaes2002@gmail.com');
            $table->string('gitHub')->default('N/A');
            $table->string('insta')->default('N/A');
            $table->string('facebook')->default('N/A');
            $table->string('twi')->default('N/A');
            $table->string('password')->default('N/A');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
