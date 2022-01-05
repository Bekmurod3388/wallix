<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Service\FileHandler;
use App\Models\Category;

class CategoryController extends Controller {
    use FileHandler;
    private $folder = "categories";

    public function index() {
        return view('admin.category.index')
            ->with('categories', Category::all());
    }


    public function create() {
        return view('admin.category.form')
            ->with('action', route('admin.category.store'))
            ->with('model', new Category());
    }


    public function store(Request $request) {
        $data = $request->validate([
            'title' => 'required',
            'text' => 'required',
            'img' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:16000'
        ]);

        $data['img'] = $this->createFile($request->img, $this->folder);
        Category::query()->create($data);
        return redirect()->route('admin.category.index')
            ->with('success', 'Категория успешно созданы.');
    }


    public function show(Category $category) {
        //
    }


    public function edit(Category $category) {
        return view('admin.category.form')
            ->with('action', route('admin.category.update', $category))
            ->with('model', $category);
    }


    public function update(Request $request, Category $category) {
        $data = $request->validate([
            'title' => 'required',
            'text' => 'required',
            'img' => []
        ]);

        if ($request->hasFile('img'))
            $data['img'] = $this->createFile($request->img, $this->folder);

        $category->update($data);
        return redirect()->route('admin.category.index')
            ->with('success', 'Категория успешно изменено');
    }


    public function destroy(Category $category) {
        $category->delete();
        return redirect()->route('admin.category.index')->with('success', 'Категория успешно удалено');
    }
}
