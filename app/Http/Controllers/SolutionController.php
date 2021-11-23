<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\Categories;
use App\Models\Solution;

class SolutionController extends Controller {

    public function index() {
        $solution = Solution::orderBy('id', 'desc')->paginate(10);
        return view('admin.solution.index')->with('solution', $solution);
    }

    public function create() {
        $categories = Categories::all();
        return view('admin.solution.create')->with('categories', $categories);
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
        $request->img->move(public_path('../storage/app/public/solutions'), $fileName);
        Solution::create([
            'title' => $request->title,
            'text' => $request->text,
            'category_id' => $request->category_id,
            'img' => $fileName,


        ]);
        //addalert('success');
        return redirect()->route('admin.solution.index')->with('success', 'Решение успешно созданы.');
    }


    public function show(Solution $solution) {
        $solutions = Solution::query()->where('id', $solution->id);
        $cat = Solution::query()->where('category_id', $solutions->category_id);
        return view('admin.messages.show', compact('solutions', 'cat'));
    }


    public function edit(Solution $solution) {
        $cat = Categories::all();
        return view('admin.solution.edit', compact('solution', 'cat'));
    }


    public function update(Request $request, Solution $solution) {
        $data = $request->validate([
            'title' => 'required',
            'text' => 'required',
            'img' => '',
            'category_id' => 'required',
        ]);
        if ($request->hasFile('img')) {
            $uuid = Str::uuid()->toString();
            $fileName = $uuid . '-' . time() . '.' . $request->img->extension();
            $request->img->move(public_path('../storage/app/public/solutions'), $fileName);
            $solution->update([
                'title' => $request->title,
                'text' => $request->text,
                'category_id' => $request->category_id,
                'img' => $fileName,
            ]);
        } else {
            $solution->update($request->all());
        }


        return redirect()->route('admin.solution.index')
            ->with('success', 'Решение solution обновлено');
    }


    public function destroy(Solution $solution) {
        $solution->delete();

        return redirect()->route('admin.solution.index')
            ->with('success', 'Решение solution удалено');
    }


    public function audit(Request $request) {
        return view('solutions.solution2', Solution::data($request->get('type')));
    }
}
