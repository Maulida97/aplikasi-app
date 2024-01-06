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
            $table->string('username')->nullable();
            $table->string('name', 255)->nullable();
            $table->enum('user_type',['admin','petugas'])->nullable();
            $table->string('password');
            $table->enum('gender',['pria','wanita'])->nullable();
            $table->rememberToken();
            $table->timestamps();

       
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
