<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Genre extends Model
{
    use HasFactory;

    protected $genres = [
        [
            'no' => 1,
            'nama_genre' => 'Parasite',
            'deskripsi' => 'image.png',
        ],
        [
            'no' => 2,
            'nama_genre' => 'The God Father',
            'deskripsi' => 'image.png',
        ],
    ];

    public function getAllGenres()
    {
        return $this->genre;
    }
}
