<?php

namespace App\Http\Controllers;


use App\Models\Categories;
use App\Models\Messages;
use App\Models\Office;
use App\Models\Post;
use App\Models\Produkt;
use App\Models\solution;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Str;

class ProduktController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function index()
    {
        $produkt = Produkt::orderBy('id','desc')->get();
        return view('admin.produkt.index')->with('produkt', $produkt);
    }




    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function create()
    {   $categories=Categories::all();
        return view('admin.produkt.create')->with('categories',$categories);
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
            'title' => 'required',
            'text' => 'required',
            'category_id'=>'required',
            'img' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:16000',
        ]);
        $uuid = Str::uuid()->toString();
        $fileName = $uuid . '-' . time() . '.' . $request->img->extension();
        $request->img->move(public_path('../public/storage/produkt'), $fileName);
        Produkt::create([
            'title' => $request->title,
            'text' => $request->text,
            'category_id'=>$request->category_id,
            'img' => $fileName,


        ]);
        //addalert('success');
        return redirect()->route('admin.produkt.index')->with('success', 'Продукты успешно созданы.');
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Models\Produkt $produkt
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function show(Produkt $produkt)
    {
        $produkt=Produkt::where('id', $produkt->id);
        $cat=Produkt::where('category_id',$produkt->category_id);
        return view('admin.messages.show',compact('produkt','cat'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Models\Produkt $produkt
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function edit(Produkt $produkt)
    {
        $cat=Categories::all();
        return view('admin.produkt.edit',compact('produkt','cat'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param \App\Models\Produkt $produkt
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Produkt $produkt)
    {
        $request->validate([
            'title' => 'required',
            'text' => 'required',
            'img' => '',
            'category_id'=>'required',
        ]);
        if ($request->hasFile('img')) {
            $uuid = Str::uuid()->toString();
            $fileName = $uuid . '-' . time() . '.' . $request->img->extension();
            $request->img->move(public_path('../public/storage/produkt'), $fileName);
            $produkt->update([
                'title' => $request->title,
                'text' => $request->text,
                'category_id'=>$request->category_id,
                'img' => $fileName,
            ]);
        } else {
            $produkt->update($request->all());
        }


        return redirect()->route('admin.produkt.index')
            ->with('success', 'Продукты solution обновлено');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Models\Produkt $produkt
     * @return \Illuminate\Http\Response
     */
    public function destroy(Produkt $produkt)
    {
        $produkt->delete();

        return redirect()->route('admin.produkt.index')
            ->with('success', 'Продукты solution удалено');
    }
}
