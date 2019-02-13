<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use App\Category;

class FrontendServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
        $this->menuLoad();
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
    
    public function menuLoad()
    {
        View::composer('layouts.app', function ($view) {
            //создаем и передаем переменную menu_categories из данного провайдера в шаблон layouts.header
            //в $menu_categories только родительские категории и только опубликованные, взятые из модели Category
            //дочерние категории получим позже через рекурсию
            /*$view->with('menu_categories', \App\Category::where('parent_id', 0)->where('published', 1)->get());*/
            $view->with('menu_categories', Category::with('childrenCat')->where('parent_id', 0)/*->where('published', 1)*/->get());
        });
    }
}
