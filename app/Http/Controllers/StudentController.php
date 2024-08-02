<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index(): View
    {
        $students = Student::all();
        return view ('student.index')->with('student', $students);
    }

    public function create(): View
    {
        return view('student.create');
    }

    public function store(Request $request): RedirectResponse
    {
        $input = $request->all();
        student::create($input);;
        return redirect('student')->with('flash_message', 'Student Added!');
    }

    public function show($id): View
    {
        $student = Student::find($id);
        return view('student.show')->with('student', $student);

    }

    public function edit(string $id): View
    {
        $student = Student::find($id);
        // dd($student->name);
        return view('student.edit')->with('student', $student);

    }

    public function update(Request $request, $id): RedirectResponse
    {
        $student = Student::find($id);
        $input = $request->all();
        $student->update($input);
        return redirect('student')->with('flash_message', 'Student Update!');


    }

    public function destroy(string $id): RedirectResponse
    {
        student::destroy($id);
        return redirect('student')->with('flash_message', 'Student Deleted!');

    }

}
