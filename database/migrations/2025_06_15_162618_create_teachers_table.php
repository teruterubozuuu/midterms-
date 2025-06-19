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
        Schema::create('teachers', function (Blueprint $table) {
            $table->string('first_name')->comment("First name of teacher")->max(255);
            $table->string('last_name')->comment('Last name of teacher')->max(255);
            $table->string('email')->comment('Email of teacher')->max(50);
            $table->string('department')->comment("Department of teacher")->max(10);
            $table->dateTime('birthday');
                        $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void {
        Schema::dropIfExists('teachers');
    }
};
