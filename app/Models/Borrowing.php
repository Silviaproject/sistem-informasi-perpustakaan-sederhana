<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Borrowing extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    protected $casts = [
        'borrow_date' => 'date',
        'due_date' => 'date',
        'return_date' => 'date',
    ];

    // Relasi ke User (Admin/Petugas yang melayani)
    public function user()
    {
        return $this->belongsTo(User::class);
    }

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