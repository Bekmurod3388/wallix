<?php

namespace App\Http\Controllers;


use App\Http\Service\FileHandler;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\Solution;

class SolutionController extends Controller {
    use FileHandler;
    private $folder = "solutions";

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

        $data['img'] = $this->createFile($request->img, $this->folder);
        Solution::create($data);

        return redirect()->route('admin.solution.index')
            ->with('success', 'Решение успешно созданы.');
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

        if ($request->hasFile('img'))
            $data['img'] = $this->createFile($request->img, $this->folder);

        $solution->update($data);
        return redirect()->route('admin.solution.index')
            ->with('success', 'Решение успешно обновлено');
    }


    public function destroy(Solution $solution) {
        $solution->delete();

        return redirect()->route('admin.solution.index')
            ->with('success', 'Решение успешно удалено');
    }


    public function audit(Request $request) {
        $data = Solution::data($request->get('type'));
        if ($request->has('category')) {
            $category = Category::query()->find($request->get('category'));
            $data['img'] = "/storage/categories/$category->img";
            $data['title'] = $category->title;
            $data['text'] = $category->text;
        }

        return view('solutions.solution2', $data);
    }
}
