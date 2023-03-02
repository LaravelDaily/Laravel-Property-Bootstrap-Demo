<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('agents', function (Blueprint $table) {
            $table->id();

            $table->string('full_name');
            $table->string('title');
            $table->string('description');
            $table->string('photo');
            $table->string('twitter');
            $table->string('facebook');
            $table->string('linkedin');
            $table->string('instagram');

            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('agents');
    }
};
