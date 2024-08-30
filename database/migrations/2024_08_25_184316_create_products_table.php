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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table ->string('user_id')->nullable();
            $table->boolean('is_visible')->default(1);
            $table->longText('description')->nullable();
            $table->string('name');
            $table->string('category');
            $table->string('imge');     
            $table->unsignedBigInteger('quanttay');
            $table->decimal('price');
            $table->boolean('is_futshred')->default(0);
            $table ->string('usertype')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
