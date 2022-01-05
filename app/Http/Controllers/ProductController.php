<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Product;
use App\Http\Service\FileHandler;


class ProductController extends Controller {

    use FileHandler;
    private $folder = "products";

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

        $filename = $this->createFile($request->img, $this->folder);
        Product::create([
            'title' => $request->title,
            'text' => $request->text,
            'img' => $filename,
        ]);

        return redirect()->route('admin.product.index')
            ->with('success', 'Продукты успешно созданы.');
    }


    public function show(Product $product) {
        $cat = Product::where('category_id', $product->category_id);
        return view('admin.messages.show', compact('product','cat'));
    }


    public function edit(Product $product) {
        $cat = Category::all();
        $action = route('admin.product.update', $product->id);
        return view('admin.product.form',
            compact('product','cat', 'action')
        );
    }


    public function update(Request $request, Product $product) {
        $data = $request->validate([
            'title' => 'required',
            'text' => 'required',
            'img' => []
        ]);

        if ($request->hasFile('img'))
            $data['img'] = $this->createFile($request->img, $this->folder);

        $product->update($data);
        return redirect()->route('admin.product.index')
            ->with('success', 'Продукт успешно обновлено');
    }


    public function destroy(Product $product) {
        $product->delete();

        return redirect()->route('admin.product.index')
            ->with('success', 'Продукты успешно удалено');
    }


    public function bestsafe(Request $request) {
        return view('products.bestsafe', Product::best($request->get('type')));
    }

    public function trustelem(Request $request) {
        return view('products.trust-elem', Product::trust($request->get('type')));
    }
}
