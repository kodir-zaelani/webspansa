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
        Schema::create('blogcategories', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->uuid('parent_id')->constrained('blogcategories')->onDelete('restrict')->nullable();
            $table->string('title')->unique();
            $table->string('slug')->unique();
            $table->boolean('masterstatus')->default(false);
            $table->boolean('status')->default(true);
            $table->string('image')->nullable();
            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('blogcategories');
    }
};
