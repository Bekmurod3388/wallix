<?php

namespace App\Http\Controllers;


use App\Models\Categories;
use App\Models\Messages;
use App\Models\Office;
use App\Models\Post;
use App\Models\solution;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Str;

class SolutionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function index()
    {
        $solution = solution::orderBy('id','desc')->paginate(10);
        return view('admin.solution.index')->with('solution', $solution);
    }




    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function create()
    {   $categories=Categories::all();
        return view('admin.solution.create')->with('categories',$categories);
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
        $request->img->move(public_path('../public/storage/solutions'), $fileName);
        solution::create([
            'title' => $request->title,
            'text' => $request->text,
            'category_id'=>$request->category_id,
            'img' => $fileName,


        ]);
        //addalert('success');
        return redirect()->route('admin.solution.index')->with('success', 'Решение успешно созданы.');
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Models\solution $solution
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function show(solution $solution)
    {
        $solutions=solution::where('id', $solution->id);
        $cat=solution::where('category_id',$solutions->category_id);
        return view('admin.messages.show',compact('solutions','cat'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\solution $solution
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function edit(solution $solution)
    {
        $cat=Categories::all();
        return view('admin.solution.edit',compact('solution','cat'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\solution $solution
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, solution $solution)
    {
        $data = $request->validate([
            'title' => 'required',
            'text' => 'required',
            'img' => '',
            'category_id'=>'required',
        ]);
        if ($request->hasFile('img')) {
            $uuid = Str::uuid()->toString();
            $fileName = $uuid . '-' . time() . '.' . $request->img->extension();
            $request->img->move(public_path('../public/storage/solutions'), $fileName);
            $solution->update([
                'title' => $request->title,
                'text' => $request->text,
                'category_id'=>$request->category_id,
                'img' => $fileName,
            ]);
        } else {
            $solution->update($request->all());
        }


        return redirect()->route('admin.solution.index')
            ->with('success', 'Решение solution обновлено');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\solution $solution
     * @return \Illuminate\Http\Response
     */
    public function destroy(solution $solution)
    {
        $solution->delete();

        return redirect()->route('admin.solution.index')
            ->with('success', 'Решение solution удалено');
    }
}
