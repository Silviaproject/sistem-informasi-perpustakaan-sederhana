<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Borrowing extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    // Relasi ke Member (Tugas Anggota A)
    public function member()
    {
        return $this->belongsTo(Member::class);
    }

    // Relasi ke BorrowingDetail
    public function details()
    {
        return $this->hasMany(BorrowingDetail::class);
    }
}