<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('infos', function (Blueprint $table) {
            $table->id();
            $table->text('introduction');
            $table->text('bio');
            $table->text('edu');

            $table->string('skill1', 500)->default('Programming Languages');
            $table->text('skill1Dis');
            $table->string('skill2', 500)->default('Web Technologies');
            $table->text('skill2Dis');
            $table->string('skill3', 500)->default('Other Skills');
            $table->text('skill3Dis');

            $table->string('Hob', 500)->default('Beyond the lines of code, I find balance and inspiration in a variety of activities:');
            $table->string('Hob1', 500)->default('Working Out');
            $table->text('Hob1Dis');
            $table->string('Hob2', 500)->default('Gaming');
            $table->text('Hob2Dis');
            $table->string('Hob3', 500)->default('Reading Books');
            $table->text('Hob3Dis');

            $table->string('Like1', 500)->default('Problem-Solving');
            $table->text('Like1Dis');
            $table->string('Like2', 500)->default('Innovation');
            $table->text('Like2Dis');
            $table->string('Like3', 500)->default('Continuous Learning');
            $table->text('Like3Dis');

            $table->string('Dis1', 500)->default('Redundancy');
            $table->text('Dis1Dis');
            $table->string('Dis2', 500)->default('Closed-mindedness');
            $table->text('Dis2Dis');
            $table->string('Dis3', 500)->default('Stagnation');
            $table->text('Dis3Dis');

            $table->timestamps(); // Assuming you want created_at and updated_at columns
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('infos');
    }
};
