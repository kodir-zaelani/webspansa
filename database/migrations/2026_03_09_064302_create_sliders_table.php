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
        Schema::create('sliders', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->string('image');
            $table->string('title');
            $table->string('slug')->unique();
            $table->string('short_title')->nullable();
            $table->string('link')->nullable();
            $table->string('target')->nullable();
            $table->string('excerpt')->nullable();
            $table->uuid('post_id')->nullable();
            $table->string('video')->nullable();
            $table->boolean('show_attribute')->default(false);
            $table->boolean('status')->default(true);
            $table->boolean('statusbanner')->default(false);
            $table->date('published_at')->nullable();
            $table->timestamps();
            $table->softDeletes();

            $table->foreign('post_id')->references('id')->on('posts')->onDelete('restrict');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sliders');
    }
};
