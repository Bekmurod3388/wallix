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

    public function product(Product $product = null) {
        if (!$product)
            return redirect('/');

        $data = Product::best(0);
        $data['img'] = $product->img;
        $data['text'] = $product->text;
        $data['heading'] = $product->title;
        $data['title'] = $product->title;
        return view('products.product')
            ->with($data);
    }


    public function create() {
        $action = route('admin.product.store');
        return view('admin.product.form', [
            'action' => $action,
            'product' => new Product()
        ]);
    }


    public function store(Request $request) {
        $request->validate([
            'title' => 'required',
            'text' => 'required',
            'img' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:16000'
        ]);
        $uuid = Str::uuid()->toString();
        $fileName = $uuid . '-' . time() . '.' . $request->img->extension();
        $request->img->move(public_path('../storage/app/public/product'), $fileName);

        Product::create([
            'title' => $request->title,
            'text' => $request->text,
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
        $action = route('admin.product.update', $product->id);
        return view('admin.product.form',
            compact('product','cat', 'action')
        );
    }


    public function update(Request $request, Product $product) {
        $request->validate([
            'title' => 'required',
            'text' => 'required',
            'img' => []
        ]);

        if ($request->hasFile('img')) {
            $uuid = Str::uuid()->toString();
            $fileName = $uuid . '-' . time() . '.' . $request->img->extension();
            $request->img->move(public_path('../storage/app/public/product'), $fileName);
            $product->update([
                'title' => $request->title,
                'text' => $request->text,
                'img' => $fileName
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


    public function bestsafe(Request $request) {
        return view('products.bestsafe', Product::best($request->get('type')));
    }

    public function trustelem(Request $request) {
        return view('products.trust-elem', Product::trust($request->get('type')));
    }
}
