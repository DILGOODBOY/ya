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
        Schema::create('pesanans', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id');
            $table->date('tanggal_pesan');
            $table->integer('total_harga');
            $table->string('jumlah_diskon');
            $table->string('token')->nullable();
            $table->string('metode_pembayaran')->nullable();
            $table->integer('bayar');
            $table->integer('kembalian');
            $table->string('status');
            $table->text('message')->nullable();
            $table->string('status_bayar');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pesanans');
    }
};
