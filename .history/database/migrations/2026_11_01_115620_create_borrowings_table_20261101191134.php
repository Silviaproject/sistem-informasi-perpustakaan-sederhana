<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('borrowings', function (Blueprint $table) {
            $table->id();
            // Catatan: Jika Anggota A belum buat tabel members, ganti dulu line bawah ini jadi: $table->unsignedBigInteger('member_id');
            $table->foreignId('member_id')->constrained('members')->onDelete('cascade');
            $table->date('borrow_date');
            $table->date('return_date');
            $table->enum('status', ['borrowed', 'returned'])->default('borrowed');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('borrowings');
    }
};