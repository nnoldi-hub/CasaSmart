<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void {
        Schema::create('materials', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('unit'); // ex: mp, ml, buc
            $table->float('price_per_unit');
            $table->float('default_consumption'); // per mp
            $table->timestamps();
        });
    }

    public function down(): void {
        Schema::dropIfExists('materials');
    }
};