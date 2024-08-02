<?php

namespace App\Http\Controllers;

use App\Models\Batch;
use App\Models\Course;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class BatchController extends Controller
{
    public function index(): View
    {
        $batch = Batch::all();
        return view ('batch.index')->with('batch', $batch);
    }

    public function create(): View
    {
        $course = Course::pluck('name','id');
        return view('batch.create', compact('course'));

    }

    public function store(Request $request): RedirectResponse
    {
        $input = $request->all();
        // dd($input);
        batch::create($input);
        return redirect('batch')->with('flash_message', 'Batch Added!');
    }

    public function show(string $id): View
    {
        $batch = batch::find($id);
        return view('batch.show')->with('batch', $batch);

    }

    public function edit(string $id): View
    {
        $batch = batch::find($id);
        return view('batch.edit')->with('batch', $batch);

    }

    public function update(Request $request, string $id): RedirectResponse
    {
        $batch = batch::find($id);
        $input = $request->all();
        $batch->update($input);
        return redirect('batch')->with('flash_message', 'Batch Update!');

    }

    public function destroy(string $id): RedirectResponse
    {
        batch::destroy($id);
        return redirect('batch')->with('flash_message', 'Batch Deleted!');

    }

}
