<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\Categories;
use App\Models\Product;


class ProductController extends Controller {

    public function index() {
        $products = Product::orderBy('id','desc')->get();

        return view('admin.product.index')->with('products', $products);
    }


    public function create() {
        $categories=Categories::all();
        return view('admin.product.create')->with('categories',$categories);
    }


    public function store(Request $request) {
        $request->validate([
            'title' => 'required',
            'text' => 'required',
            'category_id' => 'required',
            'img' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:16000',
        ]);
        $uuid = Str::uuid()->toString();
        $fileName = $uuid . '-' . time() . '.' . $request->img->extension();
        $request->img->move(public_path('../public/storage/product'), $fileName);
        Product::create([
            'title' => $request->title,
            'text' => $request->text,
            'category_id'=>$request->category_id,
            'img' => $fileName,
        ]);

        return redirect()->route('admin.product.index')->with('success', 'Продукты успешно созданы.');
    }


    public function show(Product $product) {
        $cat = Product::where('category_id', $product->category_id);
        return view('admin.messages.show', compact('product','cat'));
    }


    public function edit(Product $product) {
        $cat = Categories::all();
        return view('admin.product.edit', compact('product','cat'));
    }


    public function update(Request $request, Product $product) {
        $request->validate([
            'title' => 'required',
            'text' => 'required',
            'img' => '',
            'category_id' => 'required',
        ]);

        if ($request->hasFile('img')) {
            $uuid = Str::uuid()->toString();
            $fileName = $uuid . '-' . time() . '.' . $request->img->extension();
            $request->img->move(public_path('../public/storage/product'), $fileName);
            $product->update([
                'title' => $request->title,
                'text' => $request->text,
                'category_id'=>$request->category_id,
                'img' => $fileName,
            ]);
        } else {
            $product->update($request->all());
        }


        return redirect()->route('admin.product.index')
            ->with('success', 'Продукты solution обновлено');
    }


    public function destroy(Product $product) {
        $product->delete();

        return redirect()->route('admin.product.index')
            ->with('success', 'Продукты solution удалено');
    }
}
