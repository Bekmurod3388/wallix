<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use App\Models\Post;

class PostController extends Controller {

    public function index() {
        $posts = Post::orderBy('id', 'desc')->get();
        return view('admin.posts.index')->with('posts', $posts);
    }


    public function create() {
        return view('admin.posts.create');
    }


    public function store(Request $request) {
        $request->validate([
            'header_ru' => 'required',
            'description_ru' => 'required',
            'img' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:16000',
        ]);
        $uuid = Str::uuid()->toString();
        $fileName = $uuid . '-' . time() . '.' . $request->img->extension();
        $request->img->move(public_path('../public/storage/posts'), $fileName);
        Post::create([
            'header_ru' => $request->header_ru,
            'description_ru' => $request->description_ru,
            'img' => $fileName,


        ]);

        return redirect()->route('admin.posts.index')->with('success', 'Новости успешно созданы.');
    }


    public function show(Post $post) {
        Post::where('id', $post->id)
            ->update([
                'viewed' => DB::raw('viewed+1'),

            ]);

        return view('news-item.news-item', compact('post'));
    }


    public function edit(Post $post) {
        return view('admin.posts.edit', compact('post'));
    }


    public function update(Request $request, Post $post) {
        $request->validate([
            'header_ru' => 'required',
            'description_ru' => 'required',
            'img' => '',
        ]);
        if ($request->hasFile('img')) {
            $uuid = Str::uuid()->toString();
            $fileName = $uuid . '-' . time() . '.' . $request->img->extension();
            $request->img->move(public_path('../public/storage/posts'), $fileName);
            $post->update([
                'header_ru' => $request->header_ru,
                'description_ru' => $request->description_ru,
                'img' => $fileName,
            ]);
        } else {
            $post->update($request->all());
        }


        return redirect()->route('admin.posts.index')
            ->with('success', 'Новости успешно обновлено');
    }


    public function destroy(Post $post) {
        $post->delete();

        return redirect()->route('admin.posts.index')
            ->with('success', 'Новости успешно удалено');
    }


    public function news() {
        $posts = Post::orderBy('id', 'desc')->get();
        return view('news.news')->with('posts', $posts);
    }
}
