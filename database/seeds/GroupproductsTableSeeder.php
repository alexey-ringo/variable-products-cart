<?php

use Illuminate\Database\Seeder;
use App\Groupproduct;

class GroupproductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Groupproduct::create([
            'name' => 'Куртка из искусственной замши с бахромой',
            'slug' => 'Kurtka_s_bahromoy',
            'image' => 'default/3_1_1.jpg',
            'details' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in? Aliquam, dolore!',
            'details2' => 'Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in? Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam, dolore!',
            'details3' => 'Aliquam, dolore! Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in?',
            'price' => 3500,
            'brand_id' => 1,
        ]);
        
        Groupproduct::create([
            'name' => 'Платье короткое из мягкой ткани',
            'slug' => 'Platye_corotkoe_iz_myagkoy_tkany',
            'image' => 'default/4_1_1.jpg',
            'details' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in? Aliquam, dolore!',
            'details2' => 'Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in? Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam, dolore!',
            'details3' => 'Aliquam, dolore! Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in?',
            'price' => 2000,
            'brand_id' => 1,
        ]);
        
        Groupproduct::create([
            'name' => 'Блуза с открытыми плечами',
            'slug' => 'Bluza_s_otkryrymy_plechamy',
            'image' => 'default/5_1_1.jpg',
            'details' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in? Aliquam, dolore!',
            'details2' => 'Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in? Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam, dolore!',
            'details3' => 'Aliquam, dolore! Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in?',
            'price' => 1500,
            'brand_id' => 1,
        ]);
        
        Groupproduct::create([
            'name' => 'Стеганная куртка из нейлона',
            'slug' => 'Stegannaya_kurtka_is_neylona',
            'image' => 'default/6_1_1.jpg',
            'details' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in? Aliquam, dolore!',
            'details2' => 'Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in? Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam, dolore!',
            'details3' => 'Aliquam, dolore! Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in?',
            'price' => 5500,
            'brand_id' => 1,
        ]);
    }
}
