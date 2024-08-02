<?php

namespace App\Http\Controllers;

use App\Models\Teacher;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class TeacherController extends Controller
{
    public function index(): View
    {
        $teachers = Teacher::all();
        return view('teacher.index')->with('teacher', $teachers);
    }

    public function create(): View
    {
        return view('teacher.create');
    }

    public function store(Request $request): RedirectResponse
    {
        // $input = $request->all();
        // teacher::create($input);;
        // return redirect('teacher')->with('flash_message', 'teacher Added!');

        $input = $request->all();
        teacher::create($input);;
        return redirect('teacher')->with('flash_message', 'Teacher Added!');
    }

    public function show(string $id): View
    {
        $teacher = teacher::find($id);
        return view('teacher.show')->with('teacher', $teacher);
    }


    public function edit(string $id): View
    {
        $teacher = teacher::find($id);
        return view('teacher.edit')->with('teacher', $teacher);
    }


    public function update(Request $request, string $id): RedirectResponse
    {
        $teacher = teacher::find($id);
        $input = $request->all();
        $teacher->update($input);
        return redirect('teacher')->with('flash_message', 'teacher Update!');
    }
    

    public function destroy(string $id): RedirectResponse
    {
        teacher::destroy($id);
        return redirect('teacher')->with('flash_message', 'teacher Deleted!');

    }
}
