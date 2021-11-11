<?php

namespace App\Http\Controllers;

use App\Models\Categories;
use App\Models\Post;
use App\Models\Produkt;
use App\Models\solution;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BladeController extends Controller
{
        public function index()
        {
            $solution = solution::orderBy('id','desc')->take(3)->get();
            $news=Post::orderby('id','desc')->take(4)->get();
            $count=count($news);
            return view('index',compact('solution','news','count'));
        }
        public function solution(){
            $solution = solution::orderBy('id','desc')->paginate(25);
            return view('solution')->with('solution', $solution);
        }
        public function product(){
            $product = Produkt::orderBy('id','desc')->paginate(25);
            return view('produkt')->with('product', $product);
        }

    /**
     * Display the specified resource.
     *
     * @param \App\Models\Post $post
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function news(Post $post)
    {
        Post::where('id', $post->id)
            ->update([
                'viewed' => DB::raw('viewed+1'),

            ]);

        return view('news-item', compact('post'));
    }


    /**
     * Display the specified resource.
     *
     * @param \App\Models\solution $solution
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function show(solution $solution)
    {


        $cat=solution::all()->where('category_id', $solution->category_id );
        $count=count($cat);
        $category=Categories::all()->where('id',$solution->category_id);
        return view('solution1',compact('solution','cat','count','category'));
    }
    /**
     * Display the specified resource.
     *
     * @param \App\Models\Produkt $product
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function produkt(Produkt $product)
    {


        $cat=Produkt::all()->where('category_id', $product->category_id );
        $count=count($cat);
        $category=Categories::all()->where('id',$product->category_id);
        return view('product-item',compact('product','cat','count','category'));
    }
}
