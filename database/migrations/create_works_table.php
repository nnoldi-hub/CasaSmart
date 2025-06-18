<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void {
        Schema::create('works', function (Blueprint $table) {
            $table->id();
            $table->foreignId('space_id')->constrained()->onDelete('cascade');
            $table->foreignId('material_id')->constrained()->onDelete('cascade');
            $table->string('type'); // rigips, glet, lavabila etc.
            $table->float('surface'); // optional override
            $table->timestamps();
        });
    }

    public function down(): void {
        Schema::dropIfExists('works');
    }
};