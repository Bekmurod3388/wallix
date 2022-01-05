<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\Solution;

class SolutionController extends Controller {

    public function index() {
        $solutions = Solution::orderBy('id', 'desc')->paginate(10);
        return view('admin.solution.index')->with('solutions', $solutions);
    }

    public function solution(Solution $solution = null) {
        if ($solution)
            return view("solutions.$solution->template")
                ->with('solution', $solution);

        return $solution;
    }

    public function create() {
        $action = route('admin.solution.store');

        return view('admin.solution.form')
            ->with('action', $action)
            ->with('solution', new Solution());
    }


    public function store(Request $request) {
        $data = $request->validate([
            'title' => 'required',
            'text' => 'required',
            'img' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:16000',
            'template_id' => 'required'
        ]);

        $uuid = Str::uuid()->toString();
        $fileName = $uuid . '-' . time() . '.' . $request->img->extension();
        $request->img->move(public_path('../storage/app/public/solutions'), $fileName);

        $data['img'] = $fileName;
        Solution::create($data);

        return redirect()->route('admin.solution.index')->with('success', 'Решение успешно созданы.');
    }


    public function show(Solution $solution) {
        $solutions = Solution::query()->where('id', $solution->id);
        $cat = Solution::query()->where('category_id', $solutions->category_id);
        return view('admin.messages.show', compact('solutions', 'cat'));
    }


    public function edit(Solution $solution) {
        $action = route('admin.solution.update',$solution->id);
        return view('admin.solution.form',
            compact('action', 'solution'));
    }


    public function update(Request $request, Solution $solution) {
        $data = $request->validate([
            'title' => 'required',
            'text' => 'required',
            'img' => '',
            'template_id' => 'required'
        ]);

        if ($request->hasFile('img')) {
            $uuid = Str::uuid()->toString();
            $fileName = $uuid . '-' . time() . '.' . $request->img->extension();
            $request->img->move(public_path('../storage/app/public/solutions'), $fileName);
            $data['img'] = $fileName;
        }

        $solution->update($data);

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
