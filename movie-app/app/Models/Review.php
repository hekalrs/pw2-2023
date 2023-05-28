<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    use HasFactory;

    protected $reviews = [
        [
            'no' => 1,
            'film' => 'The Shawshank Redemption',
            'user' => 'image.png',
            'rating' => 'Drama',
            'review' => 'USA',
            'tanggal' => 1994,
        ],
        [
            'no' => 2,
            'film' => 'The Shawshank Redemption',
            'user' => 'image.png',
            'rating' => 'Drama',
            'review' => 'USA',
            'tanggal' => 1994,
        ],
        [
            'no' => 3,
            'film' => 'The Shawshank Redemption',
            'user' => 'image.png',
            'rating' => 'Drama',
            'review' => 'USA',
            'tanggal' => 1994,
        ],
        [
            'no' => 4,
            'film' => 'The Shawshank Redemption',
            'user' => 'image.png',
            'rating' => 'Drama',
            'review' => 'USA',
            'tanggal' => 1994,
        ],
        [
            'no' => 5,
            'film' => 'The Shawshank Redemption',
            'user' => 'image.png',
            'rating' => 'Drama',
            'review' => 'USA',
            'tanggal' => 1994,
        ],
    ];

    public function getAllReviews()
    {
        return $this->reviews;
    }
}
