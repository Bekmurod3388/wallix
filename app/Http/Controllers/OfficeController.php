<?php

namespace App\Http\Controllers;


use App\Models\Office;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Str;

class OfficeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function index()
    {
        $office = Office::orderBy('id','desc')->paginate(10);
        return view('admin.office.index')->with('office', $office);
    }


    public function office(){
        $office = Office::orderBy('id','desc')->paginate(10);
        return view('office')->with('office', $office);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.office.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'country' => 'required',
            'adress' => 'required',
            'phone' => 'required',
            'email' => 'required',

        ]);

        Office::create([
            'country' => $request->country,
            'adress' => $request->adress,
            'phone' => $request->phone,
            'email' => $request->email,

        ]);
        //addalert('success');
        return redirect()->route('admin.office.index')->with('success', 'Новости офис созданы.');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Office $Office
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function edit(Office $office)
    {
        return view('admin.office.edit', compact('office'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Office $office
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Office $office)
    {
        $request->validate([
            'country' => 'required',
            'adress' => 'required',
            'phone' => 'required',
            'email' => 'required',

        ]);

        $office->update($request->all());
        //addalert('success');
        return redirect()->route('admin.office.index')->with('success', 'офис успешно созданы.');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Office $office
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Http\Response
     */
    public function destroy(Office $office)
    {
        $office->delete();

        return redirect()->route('admin.office.index')
            ->with('success','Данные успешно удалены');
    }
}
