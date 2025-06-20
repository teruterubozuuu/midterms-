<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void {
       Schema::create('students', function (Blueprint $table) {
         $table->string('first_name')->comment("First name of student")->max(255);
        $table->string('last_name')->comment('Last name of student')->max(255);
        $table->string('program')->comment("Program of student")->max(255);
        $table->dateTime('birthday');
                     $table->timestamps();
    });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void {
      Schema::dropIfExists('students');
    }
};
