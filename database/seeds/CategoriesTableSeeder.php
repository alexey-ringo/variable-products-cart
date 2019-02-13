<?php

use Illuminate\Database\Seeder;
use App\Category;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Category::create([
            'parent_id' => 0,
            'name' => 'Одежда',
            'slug' => 'clothes',
        ]);
        
        Category::create([
            'parent_id' => 0,
            'name' => 'Обувь',
            'slug' => 'shues',
        ]);
        
        Category::create([
            'parent_id' => 0,
            'name' => 'Аксессуары',
            'slug' => 'acessories',
        ]);
        
        
         Category::create([
            'parent_id' => 1,
            'name' => 'Куртки',
            'slug' => 'top-jackets',
        ]);
        
        Category::create([
            'parent_id' => 1,
            'name' => 'Пальто',
            'slug' => 'coats',
        ]);
        
        Category::create([
            'parent_id' => 1,
            'name' => 'Пиджаки',
            'slug' => 'jackets',
        ]);
        
        Category::create([
            'parent_id' => 1,
            'name' => 'Костюмы',
            'slug' => 'suits',
        ]);
        
         Category::create([
            'parent_id' => 1,
            'name' => 'Брюки',
            'slug' => 'trousers',
        ]);
        
        Category::create([
            'parent_id' => 1,
            'name' => 'Джинсы',
            'slug' => 'jeans',
        ]);
        
        Category::create([
            'parent_id' => 1,
            'name' => 'Комбинезоны',
            'slug' => 'jumpsuits',
        ]);
        
        Category::create([
            'parent_id' => 1,
            'name' => 'Юбки',
            'slug' => 'skirts',
        ]);
        
        Category::create([
            'parent_id' => 1,
            'name' => 'Платья',
            'slug' => 'dresses',
        ]);
        
        Category::create([
            'parent_id' => 1,
            'name' => 'Блузы',
            'slug' => 'blouses',
        ]);
        
        Category::create([
            'parent_id' => 1,
            'name' => 'Рубашки',
            'slug' => 'shirts',
        ]);
        
        Category::create([
            'parent_id' => 1,
            'name' => 'Свитера',
            'slug' => 'sweaters',
        ]);
        
        Category::create([
            'parent_id' => 1,
            'name' => 'Толстовки',
            'slug' => 'hoodies',
        ]);
        
         Category::create([
            'parent_id' => 1,
            'name' => 'Вязанные изделия',
            'slug' => 'knitted',
        ]);
        
        Category::create([
            'parent_id' => 1,
            'name' => 'Футболки',
            'slug' => 't-shirts',
        ]);
        
        Category::create([
            'parent_id' => 1,
            'name' => 'Шорты',
            'slug' => 'shorts',
        ]);
        
        Category::create([
            'parent_id' => 1,
            'name' => 'Боди',
            'slug' => 'body',
        ]);
        
        Category::create([
            'parent_id' => 1,
            'name' => 'Топы',
            'slug' => 'top',
        ]);
        
        Category::create([
            'parent_id' => 1,
            'name' => 'Купальники',
            'slug' => 'swimwears',
        ]);
        
        Category::create([
            'parent_id' => 1,
            'name' => 'Белье',
            'slug' => 'linen',
        ]);
        
        
        
        //----------------------
        Category::create([
            'parent_id' => 2,
            'name' => 'Новая коллекция',
            'slug' => 'new-shoes-collection',
        ]);
        
        Category::create([
            'parent_id' => 2,
            'name' => 'Все',
            'slug' => 'all',
        ]);
        
        Category::create([
            'parent_id' => 2,
            'name' => 'Туфли на каблуке',
            'slug' => 'High-heel-shoes',
        ]);
        
        Category::create([
            'parent_id' => 2,
            'name' => 'Босоножки на каблуке',
            'slug' => 'heels',
        ]);
        
         Category::create([
            'parent_id' => 2,
            'name' => 'Кроссовки и Кеды',
            'slug' => 'sneakers',
        ]);
        
        Category::create([
            'parent_id' => 2,
            'name' => 'Сандалии',
            'slug' => 'sandals',
        ]);
        
        Category::create([
            'parent_id' => 2,
            'name' => 'Обувь на платформе',
            'slug' => 'platform-shoes',
        ]);
        
        Category::create([
            'parent_id' => 2,
            'name' => 'Обувь на плоской подошве',
            'slug' => 'flat-sole-shues',
        ]);
        
        Category::create([
            'parent_id' => 2,
            'name' => 'Сапоги',
            'slug' => 'high-boots',
        ]);
        
        Category::create([
            'parent_id' => 2,
            'name' => 'Ботинки',
            'slug' => 'boots',
        ]);
        
        Category::create([
            'parent_id' => 2,
            'name' => 'Ботильоны',
            'slug' => 'ankle-boots',
        ]);
        
        //-----------------
        
        Category::create([
            'parent_id' => 3,
            'name' => 'Новая коллекция',
            'slug' => 'new-collection',
        ]);
        
         Category::create([
            'parent_id' => 3,
            'name' => 'Сумки',
            'slug' => 'bags',
        ]);
        
        Category::create([
            'parent_id' => 3,
            'name' => 'Ремни',
            'slug' => 'belts',
        ]);
        
        Category::create([
            'parent_id' => 3,
            'name' => 'Кошельки',
            'slug' => 'vallets',
        ]);
        
        Category::create([
            'parent_id' => 3,
            'name' => 'Очки',
            'slug' => 'glasses',
        ]);
        
        Category::create([
            'parent_id' => 3,
            'name' => 'Шляпы, Шапки',
            'slug' => 'hats',
        ]);
        
        Category::create([
            'parent_id' => 3,
            'name' => 'Шарфы',
            'slug' => 'scarfes',
        ]);
        
        Category::create([
            'parent_id' => 3,
            'name' => 'Платки',
            'slug' => 'shawls',
        ]);
        
        Category::create([
            'parent_id' => 3,
            'name' => 'Украшения',
            'slug' => 'Jeveleries',
        ]);
    }
}
