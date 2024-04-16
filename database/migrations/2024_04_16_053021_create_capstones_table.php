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
        Schema::create('capstones', function (Blueprint $table) {
            $table->id();
            $table->string('capstone_name');
            $table->text('description');
            $table->text('sdg');
            $table->timestamps();
        });

        Schema::create('panelists', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('major');
            $table->string('age');
            $table->timestamps();
        });

        Schema::create('capstone_groups', function (Blueprint $table) {
            $table->id();
            $table->string('group_name');
            $table->unsignedBigInteger('capstone_id'); 
            $table->foreign('capstone_id')->references('id')->on('capstones');
            $table->string('email')->unique();
            $table->string('school');
            $table->unsignedBigInteger('panelists_id');
            $table->foreign('panelists_id')->references('id')->on('panelists');
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
        Schema::dropIfExists('capstone_groups');
        Schema::dropIfExists('capstones');
        Schema::dropIfExists('panelists');
        Schema::dropIfExists('logins');
    }
};
