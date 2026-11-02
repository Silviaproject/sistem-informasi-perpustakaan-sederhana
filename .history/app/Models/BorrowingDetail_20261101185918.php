<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BorrowingDetail extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    // Relasi balik ke Borrowing
    public function borrowing()
    {
        return $this->belongsTo(Borrowing::class);
    }

    // Relasi ke Book (Tugas Anggota B)
    public function book()
    {
        return $this->belongsTo(Book::class);
    }
}