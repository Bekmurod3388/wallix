<?php

namespace App\Http\Controllers;

use App\Models\Categories;
use App\Models\Post;
use App\Models\solution;
use Illuminate\Http\Request;

class BladeController extends Controller
{
        public function index()
        {
            $solution = solution::orderBy('id','desc')->limit(3)->get();
            $news=Post::orderby('id','desc')->limit(3)->get();
            return view('index',compact('solution','news'));
        }
        public function solution(){
            $solution = solution::orderBy('id','desc')->paginate(25);
            return view('solution')->with('solution', $solution);
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
}
