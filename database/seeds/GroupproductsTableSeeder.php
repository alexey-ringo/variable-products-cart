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
        //id 1
        Groupproduct::create([
            'name' => 'Куртка из искусственной замши с бахромой',
            'slug' => 'Kurtka_s_bahromoy',
            'image' => 'default/3_1_1.jpg',
            'details' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in? Aliquam, dolore!',
            'details2' => 'Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in? Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam, dolore!',
            'details3' => 'Aliquam, dolore! Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in?',
            'price' => 3500,
            'brand_id' => 1,
            'hit' => true,
            'new' => false,
            'on_sale'=> false,
        ]);
        
        //id 2
        Groupproduct::create([
            'name' => 'Стеганная куртка из нейлона',
            'slug' => 'Stegannaya_kurtka_is_neylona',
            'image' => 'default/6_1_1.jpg',
            'details' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in? Aliquam, dolore!',
            'details2' => 'Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in? Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam, dolore!',
            'details3' => 'Aliquam, dolore! Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in?',
            'price' => 5500,
            'brand_id' => 2,
            'hit' => false,
            'new' => false,
            'on_sale'=> false,
        ]);
        
        //id 3
        Groupproduct::create([
            'name' => 'Укороченная куртка в байкерском стиле',
            'slug' => 'Ukorochennaya_kurtka_v_baykerskom_style',
            'image' => 'default/7_1_1.jpg',
            'details' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in? Aliquam, dolore!',
            'details2' => 'Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in? Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam, dolore!',
            'details3' => 'Aliquam, dolore! Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in?',
            'price' => 2700,
            'brand_id' => 3,
            'hit' => false,
            'new' => false,
            'on_sale'=> true,
        ]);
        
        //id 4
        Groupproduct::create([
            'name' => 'Куртка из нейлона с капюшоном',
            'slug' => 'Kurtka_is_neylona_s_kapyushonom',
            'image' => 'default/9_1_1.jpg',
            'details' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in? Aliquam, dolore!',
            'details2' => 'Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in? Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam, dolore!',
            'details3' => 'Aliquam, dolore! Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in?',
            'price' => 2400,
            'brand_id' => 4,
            'hit' => false,
            'new' => true,
            'on_sale'=> false,
        ]);
        
        //id 5
        Groupproduct::create([
            'name' => 'Джинсовая куртка оверсайз с эффектом потертости',
            'slug' => 'Djinsovaya_kurtka_oversize_s_effectom_potertosty',
            'image' => 'default/11_1_1.jpg',
            'details' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in? Aliquam, dolore!',
            'details2' => 'Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in? Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam, dolore!',
            'details3' => 'Aliquam, dolore! Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in?',
            'price' => 2900,
            'brand_id' => 5,
            'hit' => false,
            'new' => false,
            'on_sale'=> true,
        ]);
        
        //id 6
        Groupproduct::create([
            'name' => 'Куртка из нейлона серебристого цвета',
            'slug' => 'Kurtka_is_neylona_serebristogo_tsveta',
            'image' => 'default/12_1_1.jpg',
            'details' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in? Aliquam, dolore!',
            'details2' => 'Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in? Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam, dolore!',
            'details3' => 'Aliquam, dolore! Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in?',
            'price' => 3000,
            'brand_id' => 6,
            'hit' => true,
            'new' => false,
            'on_sale'=> false,
        ]);
        
        //id 7
        Groupproduct::create([
            'name' => 'Куртка из искусственного меха с капюшоном и боковыми полосами',
            'slug' => 'Kurtka_is_iskusstvennogo_meha_s_kapyushonom_i_bokovimy_polosamy',
            'image' => 'default/13_1_1.jpg',
            'details' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in? Aliquam, dolore!',
            'details2' => 'Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in? Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam, dolore!',
            'details3' => 'Aliquam, dolore! Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in?',
            'price' => 4800,
            'brand_id' => 7,
            'hit' => false,
            'new' => true,
            'on_sale'=> false,
        ]);
        
        //id 8
        Groupproduct::create([
            'name' => 'Короткая куртка-бомбер из нейлона',
            'slug' => 'Korotkaya_kurtka_bomber_is_neylona',
            'image' => 'default/14_1_1.jpg',
            'details' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in? Aliquam, dolore!',
            'details2' => 'Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in? Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam, dolore!',
            'details3' => 'Aliquam, dolore! Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in?',
            'price' => 2500,
            'brand_id' => 1,
            'hit' => true,
            'new' => false,
            'on_sale'=> false,
        ]);
        
        //id 9
        Groupproduct::create([
            'name' => 'Куртка в стиле сафари с карманами',
            'slug' => 'Kurtka_v_style_safari_s_karmanamy',
            'image' => 'default/15_1_1.jpg',
            'details' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in? Aliquam, dolore!',
            'details2' => 'Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in? Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam, dolore!',
            'details3' => 'Aliquam, dolore! Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in?',
            'price' => 3100,
            'brand_id' => 2,
            'hit' => false,
            'new' => false,
            'on_sale'=> true,
        ]);
        
        //id 10
        Groupproduct::create([
            'name' => 'Куртка-ветровка из нейлона с капюшоном',
            'slug' => 'Kurtka_vetrovka_is_neylona_s_kapyushonom',
            'image' => 'default/16_1_1.jpg',
            'details' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in? Aliquam, dolore!',
            'details2' => 'Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in? Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam, dolore!',
            'details3' => 'Aliquam, dolore! Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in?',
            'price' => 3200,
            'brand_id' => 3,
            'hit' => false,
            'new' => false,
            'on_sale'=> false,
        ]);
        
        //id 11
        Groupproduct::create([
            'name' => 'Куртка из искусственной кожи',
            'slug' => 'Kurtka_is_iskusstvennoy_kozshy',
            'image' => 'default/17_1_1.jpg',
            'details' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in? Aliquam, dolore!',
            'details2' => 'Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in? Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam, dolore!',
            'details3' => 'Aliquam, dolore! Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in?',
            'price' => 3000,
            'brand_id' => 4,
            'hit' => false,
            'new' => false,
            'on_sale'=> true,
        ]);
        
        //id 12
        Groupproduct::create([
            'name' => 'Байкерская куртка из искусственной замши',
            'slug' => 'Baykerskaya_kurtka_is_iskusstvennoy_zamshy',
            'image' => 'default/18_1_1.jpg',
            'details' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in? Aliquam, dolore!',
            'details2' => 'Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in? Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam, dolore!',
            'details3' => 'Aliquam, dolore! Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in?',
            'price' => 4000,
            'brand_id' => 5,
            'hit' => true,
            'new' => false,
            'on_sale'=> false,
        ]);
        
        //id 13
        Groupproduct::create([
            'name' => 'Базовая куртка-рубашка',
            'slug' => 'Bazovaya_kurtka_rubashka',
            'image' => 'default/19_1_1.jpg',
            'details' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in? Aliquam, dolore!',
            'details2' => 'Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in? Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam, dolore!',
            'details3' => 'Aliquam, dolore! Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in?',
            'price' => 1900,
            'brand_id' => 6,
            'hit' => false,
            'new' => true,
            'on_sale'=> false,
        ]);
        
        
        //id 14
        Groupproduct::create([
            'name' => 'Шерстяное пальто с молниями',
            'slug' => 'Sherstyanoe_palto_s_molniamy',
            'image' => 'default/20_1_1.jpg',
            'details' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in? Aliquam, dolore!',
            'details2' => 'Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in? Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam, dolore!',
            'details3' => 'Aliquam, dolore! Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in?',
            'price' => 3500,
            'brand_id' => 7,
            'hit' => false,
            'new' => false,
            'on_sale'=> true,
        ]);
        
        //id 15
        Groupproduct::create([
            'name' => 'Тренч из искусственной кожи',
            'slug' => 'Trench_is_iskusstvennoy_kozshy',
            'image' => 'default/21_1_1.jpg',
            'details' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in? Aliquam, dolore!',
            'details2' => 'Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in? Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam, dolore!',
            'details3' => 'Aliquam, dolore! Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in?',
            'price' => 3400,
            'brand_id' => 1,
            'hit' => false,
            'new' => true,
            'on_sale'=> false,
        ]);
        
        //id 16
        Groupproduct::create([
            'name' => 'Пиджак с подворачивающимися рукавами длиной 3/4',
            'slug' => 'Pidjak_s_podvorachivayushimisya_rukavamy_dlinoy_3_4',
            'image' => 'default/8_1_1.jpg',
            'details' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in? Aliquam, dolore!',
            'details2' => 'Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in? Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam, dolore!',
            'details3' => 'Aliquam, dolore! Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in?',
            'price' => 2300,
            'brand_id' => 2,
            'hit' => false,
            'new' => false,
            'on_sale'=> true,
        ]);
        
        //id 17
        Groupproduct::create([
            'name' => 'Брюки-клеш из трикотажа в рубчик',
            'slug' => 'Bryuki_klesh_is_trikitazha_v_rubchik',
            'image' => 'default/22_1_1.jpg',
            'details' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in? Aliquam, dolore!',
            'details2' => 'Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in? Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam, dolore!',
            'details3' => 'Aliquam, dolore! Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in?',
            'price' => 1300,
            'brand_id' => 3,
            'hit' => false,
            'new' => false,
            'on_sale'=> false,
        ]);
        
        //id 18
        Groupproduct::create([
            'name' => 'Джинсы с эффектом пуш-ап и низкой посадкой',
            'slug' => 'Djinsy_s_effectom_push_up_i_myagkoy_posadkoy',
            'image' => 'default/23_1_1.jpg',
            'details' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in? Aliquam, dolore!',
            'details2' => 'Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in? Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam, dolore!',
            'details3' => 'Aliquam, dolore! Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in?',
            'price' => 1700,
            'brand_id' => 4,
            'hit' => true,
            'new' => false,
            'on_sale'=> false,
        ]);
        
        //id 19
        Groupproduct::create([
            'name' => 'Короткий джинсовый комбинезон',
            'slug' => 'Korotkiy_djinsoviy_kombinezon',
            'image' => 'default/24_1_1.jpg',
            'details' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in? Aliquam, dolore!',
            'details2' => 'Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in? Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam, dolore!',
            'details3' => 'Aliquam, dolore! Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in?',
            'price' => 2350,
            'brand_id' => 5,
            'hit' => true,
            'new' => false,
            'on_sale'=> false,
        ]);
        
        //id 20
        Groupproduct::create([
            'name' => 'Юбка с принтом и воланами',
            'slug' => 'Yubka_s_printom_i_volanamy',
            'image' => 'default/25_1_1.jpg',
            'details' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in? Aliquam, dolore!',
            'details2' => 'Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in? Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam, dolore!',
            'details3' => 'Aliquam, dolore! Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in?',
            'price' => 1100,
            'brand_id' => 6,
            'hit' => false,
            'new' => false,
            'on_sale'=> false,
        ]);
        
        
        
//----------------- 
        //id 21
        Groupproduct::create([
            'name' => 'Платье короткое из мягкой ткани',
            'slug' => 'Platye_corotkoe_iz_myagkoy_tkany',
            'image' => 'default/4_1_1.jpg',
            'details' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in? Aliquam, dolore!',
            'details2' => 'Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in? Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam, dolore!',
            'details3' => 'Aliquam, dolore! Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in?',
            'price' => 2000,
            'brand_id' => 7,
            'hit' => false,
            'new' => true,
            'on_sale'=> false,
        ]);
        
        //id 22
        Groupproduct::create([
            'name' => 'Платье с эффектом деграде',
            'slug' => 'Platye_s_eddectom_degrade',
            'image' => 'default/10_1_1.jpg',
            'details' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in? Aliquam, dolore!',
            'details2' => 'Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in? Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam, dolore!',
            'details3' => 'Aliquam, dolore! Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in?',
            'price' => 2500,
            'brand_id' => 1,
            'hit' => true,
            'new' => false,
            'on_sale'=> false,
        ]);
        
        //id 23
        Groupproduct::create([
            'name' => 'Блуза с открытыми плечами',
            'slug' => 'Bluza_s_otkryrymy_plechamy',
            'image' => 'default/5_1_1.jpg',
            'details' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in? Aliquam, dolore!',
            'details2' => 'Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in? Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam, dolore!',
            'details3' => 'Aliquam, dolore! Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in?',
            'price' => 1500,
            'brand_id' => 2,
            'hit' => false,
            'new' => false,
            'on_sale'=> true,
        ]);
        
        
    }
}
