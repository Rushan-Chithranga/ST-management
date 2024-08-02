<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    public function index(): View
    {
        $course = Course::all();
        return view ('course.index')->with('course', $course);
    }

    public function create(): View
    {
        return view('course.create');

    }

    public function store(Request $request): RedirectResponse
    {
        $input = $request->all();
        course::create($input);;
        return redirect('course')->with('flash_message', 'Course Added!');
    }

    public function show(string $id): View
    {
        $course = course::find($id);
        return view('course.show')->with('course', $course);

    }

    public function edit(string $id): View
    {
        $course = course::find($id);
        return view('course.edit')->with('course', $course);

    }

    public function update(Request $request, string $id): RedirectResponse
    {
        $course = course::find($id);
        $input = $request->all();
        $course->update($input);
        return redirect('course')->with('flash_message', 'course Update!');

    }

    public function destroy(string $id): RedirectResponse
    {
        course::destroy($id);
        return redirect('course')->with('flash_message', 'course Deleted!');
    }
}
