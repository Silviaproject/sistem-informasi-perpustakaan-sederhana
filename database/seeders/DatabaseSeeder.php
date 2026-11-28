<?php

namespace Database\Seeders;

use App\Models\Book;
use App\Models\Category;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        // Seeder User (Anggota A)
        User::create([
            'name' => 'Administrator',
            'email' => 'admin@perpustakaan.com',
            'password' => Hash::make('password'),
            'role' => 'admin',
        ]);

        User::create([
            'name' => 'Petugas Perpustakaan',
            'email' => 'petugas@perpustakaan.com',
            'password' => Hash::make('password'),
            'role' => 'petugas',
        ]);

        // Seeder Kategori & Buku (Anggota B)
        $teknologi = Category::create(['name' => 'Teknologi Informasi']);
        $novel = Category::create(['name' => 'Novel & Sastra']);
        $sains = Category::create(['name' => 'Sains & Matematika']);

        Book::create([
            'title' => 'Pemrograman Web Framework dengan Laravel',
            'author' => 'Budi Raharjo',
            'year' => 2025,
            'stock' => 10,
            'category_id' => $teknologi->id,
        ]);

        Book::create([
            'title' => 'Laskar Pelangi',
            'author' => 'Andrea Hirata',
            'year' => 2005,
            'stock' => 5,
            'category_id' => $novel->id,
        ]);

        Book::create([
            'title' => 'Kalkulus Dasar',
            'author' => 'Edwin J. Purcell',
            'year' => 2018,
            'stock' => 7,
            'category_id' => $sains->id,
        ]);
    }
}