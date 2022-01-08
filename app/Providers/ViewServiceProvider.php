<?php

namespace App\Providers;

use App\Models\Category;
use App\Models\Post;
use App\Models\Product;
use App\Models\Solution;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use Illuminate\View\View as Blade;

class ViewServiceProvider extends ServiceProvider {
    /**
     * Register services.
     *
     * @return void
     */
    public function register() {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot() {
        View::composer(['components.news'], function(Blade $view) {
            $news = Post::query()->orderBy('id', 'desc')->limit(2)->get();

            $view->with(['news' => $news]);
        });

        View::composer(['components.header'], function(Blade $view) {
            $products = Product::query()->get();
            $view->with(['products' => $products]);

            $solutions = Solution::query()->get();
            $view->with(['solutions' => $solutions]);
        });

        View::composer(['components.categories'], function(Blade $view) {
            $categories = Category::all();
            $view->with('categories', $categories);
        });
    }
}
