<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use App\Models\Video;
use App\Models\News;
use App\Models\Product;


class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        $videos = Video::all();
        View::share('videos',$videos);

        $news = News::all();
        View::share('news',$news);

        $products = Product::all();
        View::share('products',$products);
    }
}
