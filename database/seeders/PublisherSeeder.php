<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PublisherSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('publishers')->insert([
            [
                'name'=>'Kompas Gramedia',
                'adress'=>'Kompas Gramedia, Jl. Palmerah Sel. No.22-26, RT.4/RW.2, Gelora, Kecamatan Tanah Abang, Kota Jakarta Pusat',
                'phone'=>'0215483008',
                'email'=>'kompasgramedia@gmail.com',
                'image'=>'https://asset.kompas.com/crops/lvYGKhhQMo7WbK81H1p_cFQsOlw=/0x0:1000x667/750x500/data/photo/2018/08/15/19860368112.jpg'
            ],
            [
                'name'=>'Bentang Pustaka',
                'adress'=>'Jl. Pesanggrahan No.8 RT/RW : 04/36, Sanggrahan, Wedomartani, Ngemplak, Sleman, Yogyakarta, 55584.',
                'phone'=>'02747370635',
                'email'=>'promosi@bentangpustaka.com',
                'image'=>'https://kerjabilitas.com/user_image/user2/logo_e06ff6df5e20a6f30dcce473dd41c6b8.png'
            ]
            ]);
    }
}
