<?php

namespace App\Providers;

use App\Models\Post;
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
            $news = Post::query()->orderBy('id', 'desc')->limit(3)->get();

            $view->with(['news' => $news]);
        });
    }
}
