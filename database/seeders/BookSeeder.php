<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('books')->insert([
            [
                'publisher_id'=> 1,
                'title'=>' Harry Potter and the Philosophers Stone',
                'author'=>'J.K Rowling',
                'year'=>1997 ,
                'synopsis'=>'This novel tells of Harry Potter , an orphan who discovers that he is a wizard on his eleventh birthday, when he accepts an invitation to attend Hogwarts School of Witchcraft and Wizardry .',
                'image'=>'https://upload.wikimedia.org/wikipedia/id/b/bf/Harry_Potter_and_the_Sorcerer%27s_Stone.jpg?20160312111440'
            ],
            [
                'publisher_id'=> 1,
                'title'=>' Harry Potter and the Chamber of Secrets',
                'author'=>'J.K Rowling',
                'year'=>1998 ,
                'synopsis'=>'The novel chronicles Harry Potters second year at Hogwarts School of Witchcraft and Wizardry , when a series of messages on the walls of the schools corridors warn that the " Chamber of Secrets.',
                'image'=>'https://upload.wikimedia.org/wikipedia/id/4/49/Sampul_buku_Harry_Potter_dan_Kamar_Rahasia.jpg'
            ],
            [
                'publisher_id'=> 2,
                'title'=>'Sang Pemimpi',
                'author'=>'Andrea Hinata',
                'year'=>2006 ,
                'synopsis'=>'Dalam novel ini, mengeksplorasi hubungan persahabatannya dengan dua anak yatim piatu, Arai Ichsanul Mahidin dan Jimbron, serta kekuatan mimpi yang dapat membawa Andrea dan Arai melanjutkan studi ke Sorbonne, Paris, Prancis.',
                'image'=>'https://upload.wikimedia.org/wikipedia/id/thumb/8/89/Sang_Pemimpi_sampul.jpg/330px-Sang_Pemimpi_sampul.jpg'
            ],
            [
                'publisher_id'=> 2,
                'title'=>'Laskar Pelangi',
                'author'=>'Andrea Hinata',
                'year'=>2005 ,
                'synopsis'=>'Novel ini bercerita tentang kehidupan 10 anak dari keluarga miskin yang bersekolah (SD dan SMP) di sebuah sekolah Muhammadiyah di Belitung yang penuh dengan keterbatasan.',
                'image'=>'https://upload.wikimedia.org/wikipedia/id/8/8e/Laskar_pelangi_sampul.jpg'
            ]
            ]);
    }
}
