<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration {
    public function up() : void
    {
        Schema::create('users', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->string('name', 64);
            $table->string('email');
            $table->string('password');
            $table->timestamps();
        });
    }

    public function down() : void
    {
        Schema::dropIfExists('users');
    }
};
