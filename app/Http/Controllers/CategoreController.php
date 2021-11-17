<?php

namespace App\Http\Controllers;

use App\Models\Categories;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class CategoreController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function index()
    {
        $categories = Categories::all();

        return view('admin.category.index')->with('categories', $categories);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.category.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required'
        ]);
        Categories::create([
            'name'=>$request->name
        ]);
//        addAlert('success');
        return redirect()->route('admin.category.index')->with('success','Категория успешно созданы.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Categories  $category
     * @return \Illuminate\Http\Response
     */
    public function show(Categories $category)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Categories  $category
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function edit(Categories $category)
    {
        return view('admin.category.edit', compact('category', $category));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Categories  $category
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Request $request, Categories $category)
    {
        $request->validate([
            'name' => 'required',
        ]);
        $category->update($request->all());
        return redirect()->route('admin.category.index')
            ->with('success','Категория успешно изменено');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Categories  $category
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy(Categories $category)
    {
        $category->delete();
        return redirect()->route('admin.category.index')
            ->with('success','Категория успешно удалено');
    }
}
