<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Book;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        // Buat Kategori
        $cat1 = Category::create(['name' => 'Teknologi', 'description' => 'Buku seputar komputer dan pemrograman']);
        $cat2 = Category::create(['name' => 'Novel', 'description' => 'Buku fiksi, sastra, dan cerita']);
        $cat3 = Category::create(['name' => 'Sains', 'description' => 'Buku ilmu pengetahuan alam dan eksak']);

        // Buat Buku
        Book::create([
            'category_id' => $cat1->id,
            'title' => 'Pemrograman Laravel untuk Pemula',
            'author' => 'Eko Kurniawan',
            'publisher' => 'Media Kita',
            'year' => 2024,
            'stock' => 15,
        ]);

        Book::create([
            'category_id' => $cat1->id,
            'title' => 'Belajar PHP & MySQL Dari Nol',
            'author' => 'Ahmad Arifin',
            'publisher' => 'Informatika',
            'year' => 2023,
            'stock' => 10,
        ]);

        Book::create([
            'category_id' => $cat2->id,
            'title' => 'Laskar Pelangi',
            'author' => 'Andrea Hirata',
            'publisher' => 'Bentang Pustaka',
            'year' => 2005,
            'stock' => 25,
        ]);

        Book::create([
            'category_id' => $cat2->id,
            'title' => 'Bumi Manusia',
            'author' => 'Pramoedya Ananta Toer',
            'publisher' => 'Lentera Dipantara',
            'year' => 1980,
            'stock' => 8,
        ]);

        Book::create([
            'category_id' => $cat3->id,
            'title' => 'Fisika Dasar untuk Universitas',
            'author' => 'Giancoli',
            'publisher' => 'Erlangga',
            'year' => 2014,
            'stock' => 12,
        ]);
    }
}