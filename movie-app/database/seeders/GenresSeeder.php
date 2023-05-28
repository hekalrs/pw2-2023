<?php

namespace Database\Seeders;

use App\Models\Genre;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class GenresSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Genre::create([
            'nama' => 'Action',
            'deskripsi' => 'Action packed movies',
        ]);
        Genre::create([
            'nama' => 'Horror',
            'deskripsi' => 'Scary movies',
        ]);
        Genre::create([
            'nama' => 'Comedy',
            'deskripsi' => 'Funny movies',
        ]);
        Genre::create([
            'nama' => 'Romantis',
            'deskripsi' => 'kisah romantis yang menampilkan kasih sayang ',
        ]);
        Genre::create([
            'nama' => 'Thriller',
            'deskripsi' => 'membuat penonton merasakan ketegangan',
        ]);
    }
}
