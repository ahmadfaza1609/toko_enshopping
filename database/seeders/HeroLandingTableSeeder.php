<?php

namespace Database\Seeders;

use App\Models\HeroLanding;
use Illuminate\Database\Seeder;

class HeroLandingTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $hero_landing = [
            'title_hero'            => 'Belanja Mudah Dengan Toko Online EN-SHOPPING',
            'sub_heading'           => 'Pusing cari barang di marketplace? dengan belanja online terpercaya, amanah, dan mudah hanya di EN-Shopping.',
            'img_illustration'      => '',
            'created_at'        => date('Y-m-d H:i:s'),
            'updated_at'        => date('Y-m-d H:i:s')
        ];

        HeroLanding::insert($hero_landing);
    }
}
