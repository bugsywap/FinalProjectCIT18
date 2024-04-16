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
        Schema::create('startups', function (Blueprint $table) {
            $table->id();
            $table->string('capstone_name');
            $table->text('description');
            $table->text('sdg');
            $table->integer('trl');
            $table->string('email')->unique();
            $table->string('school');
            $table->timestamps();
        });

        Schema::create('logins', function (Blueprint $table) {
            $table->id();
            $table->string('username');
            $table->string('password');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('startups');
        Schema::dropIfExists('logins');
    }
};
