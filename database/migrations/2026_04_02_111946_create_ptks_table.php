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
        Schema::create('ptks', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->char('gelar_depan')->nullable();
            $table->string('nama');
            $table->char('gelar_belakang')->nullable();
            $table->char('jenis_kelamin', 1)->nullable();
            $table->string('tempat_lahir')->nullable();
            $table->date('tanggal_lahir')->nullable();
            $table->uuid('pangkatgolongan_id')->constrained()->onDelete('restrict')->nullable();
            $table->foreignUuid('jenisptk_id')->constrained()->onDelete('restrict')->nullable();
            $table->foreignUuid('agama_id')->constrained()->references('id')->on('agama')->onDelete('restrict')->nullable();
            $table->string('alamat_jalan')->nullable();
            $table->string('rt', 5)->nullable()->default('00000');
            $table->string('rw', 5)->nullable()->default('00000');
            $table->string('nama_dusun')->nullable();
            $table->char('province_code', 2)->nullable();
            $table->char('city_code', 4)->nullable();
            $table->char('district_code', 7)->nullable();
            $table->char('village_code', 10)->nullable();
            $table->string('kode_pos', 5)->nullable();
            $table->string('no_telepon_rumah')->nullable();
            $table->string('no_hp')->nullable();
            $table->string('email')->nullable();
            $table->string('penugasan')->default('induk');
            $table->string('lintang')->nullable();
            $table->string('bujur')->nullable();
            $table->text('maps')->nullable();
            $table->string('image')->nullable();
            $table->timestamps();
            $table->softDeletes();

            $table->foreign('province_code')
            ->references('code')
            ->on(config('laravolt.indonesia.table_prefix').'provinces')
            ->onUpdate('cascade')->onDelete('restrict');

            $table->foreign('city_code')
            ->references('code')
            ->on(config('laravolt.indonesia.table_prefix').'cities')
            ->onUpdate('cascade')->onDelete('restrict');

            $table->foreign('district_code')
            ->references('code')
            ->on(config('laravolt.indonesia.table_prefix').'districts')
            ->onUpdate('cascade')->onDelete('restrict');

            $table->foreign('village_code')
            ->references('code')
            ->on(config('laravolt.indonesia.table_prefix').'villages')
            ->onUpdate('cascade')->onDelete('restrict');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ptks');
    }
};
