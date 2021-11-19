<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Models\Categories;
use App\Models\Post;
use App\Models\Product;
use App\Models\solution;

class BladeController extends Controller {

    public function index() {
        $solution = solution::orderBy('id','desc')->take(3)->get();
        $news=Post::orderby('id','desc')->take(4)->get();
        $count=count($news);
        return view('index', compact('solution','news', 'count'));
    }


    public function solution() {
        $solution = solution::orderBy('id','desc')->paginate(25);
        return view('solutions.solution')->with('solution', $solution);
    }


    public function product() {
        $products = Product::orderBy('id','desc')->paginate(25);
        return view('products.product')->with('products', $products);
    }

    public function newsItem(Post $post) {
        Post::where('id', $post->id)
            ->update([
                'viewed' => DB::raw('viewed+1'),
            ]);

        return view('news.news-item', compact('post'));
    }


    public function show(solution $solution) {
        $cat=solution::all()->where('category_id', $solution->category_id );
        $count=count($cat);
        $category=Categories::all()->where('id',$solution->category_id);
        return view('solutions.solution1', compact('solution','cat', 'count', 'category'));
    }


//    public function product(Product $product) {
//        $cat=Product::all()->where('category_id', $product->category_id);
//        $count=count($cat);
//        $category=Categories::all()->where('id',$product->category_id);
//        return view('product-item',compact('product','cat', 'count', 'category'));
//    }
}
