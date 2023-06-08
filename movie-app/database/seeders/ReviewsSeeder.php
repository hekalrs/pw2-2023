<?php

namespace Database\Seeders;

use App\Models\Review;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ReviewsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Review::create([
            'film' => 'The Good Father',
            'user' => 'image.png',
            'rating' => 8.0,
            'review' => 'USA',
            'tanggal' => "1972-09-02",
        ]);
        Review::create([
            'film' => 'Pandora: Beneath the Paradise',
            'user' => 'Lee Ji Ah',
            'rating' => 6.4,
            'review' => 'Berkisah tentang kehidupan seorang perempuan, Hong Taera (Lee Ji Ah) yang terlihat sempurna dan membuat banyak orang iri kepadanya.',
            'tanggal' => "2023-03-01",
        ]);
        Review::create([
            'film' => 'The Good Bad Mother',
            'user' => 'Ra Mi Ran, Lee Do Hyun, Ahn Eun Jin, Yoo In Soo',
            'rating' => 8.5,
            'review' => 'The Good Bad Mother menceritakan Young-Soon (Ra Mi-Ran) adalah seorang ibu tunggal dan memiliki peternakan babi. Dia membesarkan putranya Kang-Ho sendirian.',
            'tanggal' => "2023-04-26",
        ]);
        Review::create([
            'film' => 'Evil Dead Rise',
            'user' => 'Lily Sullivan, Alyssa Sutherland, dan Morgan Davies',
            'rating' => 6.8,
            'review' => 'Cerita horor dalam Evil Dead Rise bermula dari penemuan Necronomicon (kitab orang mati). Ketika dibuka, kitab tersebut melepaskan roh jahat',
            'tanggal' => "2023-05-05",
        ]);
        Review::create([
            'film' => 'Dear David',
            'user' => 'Shenina Cinnamon, Emir Mahira, Caitlin North Lewis',
            'rating' => 5.8,
            'review' => 'Kehidupan Laras, murid SMA pintar, berubah total ketika blog fantasinya yang provokatif tentang David yang ia sukai bocor ke semua orang di sekolah.',
            'tanggal' => "2023-02-09",
        ]);
        Review::create([
            'film' => 'Khanzab',
            'user' => 'Yasamin Jasem, Tika Bravani, dan Arswendy Beningswara',
            'rating' => 5.5,
            'review' => 'Berkisah tentang perempuan bernama Rahayu. Ayahnya difitnah dalam tragedi pembantaian dukun santet yang terjadi di Banyuwangi pada Mei 1998.',
            'tanggal' => "2023-04-09",
        ]);
    }
}
