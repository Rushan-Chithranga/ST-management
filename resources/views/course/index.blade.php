<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Course') }}
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="bg-white shadow-md rounded-lg overflow-hidden">

                    <div class="p-4">
                        <a href="{{ route('course-create') }}" class="bg-green-500 text-white px-4 py-2 rounded hover:bg-green-700 transition duration-300" title="Add New Course">
                            <i class="fa fa-plus" aria-hidden="true"></i> Add New
                        </a>
                        <br /><br />
                        <div class="overflow-x-auto">
                            <table class="min-w-full bg-white">
                                <thead class="bg-gray-800 text-white">
                                    <tr>
                                        <th class="w-1/12 py-2 px-3 text-left">#</th>
                                        <th class="w-2/12 py-2 px-3 text-left">Name</th>
                                        <th class="w-3/12 py-2 px-3 text-left">Syllabus</th>
                                        <th class="w-2/12 py-2 px-3 text-left">Duration</th>
                                        <th class="w-4/12 py-2 px-3 text-left">Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($course as $course)
                                    <tr class="border-b">
                                        <td class="py-2 px-3">{{ $loop->iteration }}</td>
                                        <td class="py-2 px-3">{{ $course->name }}</td>
                                        <td class="py-2 px-3">{{ $course->syllabus }}</td>
                                        <td class="py-2 px-3">{{ $course->duration }}-Year</td>
                                        <td class="py-2 px-3 flex gap-3">
                                            <a href="{{ route('course-show', ['id' => $course->id]) }}" title="View Course" class="bg-blue-500 text-white px-2 py-1 rounded hover:bg-blue-700 transition duration-300">
                                                <i class="fa fa-eye" aria-hidden="true"></i> View
                                            </a>
                                            <a href="{{ route('course-edit', ['id' => $course->id]) }}" title="Edit Course" class="bg-yellow-500 text-white px-2 py-1 rounded hover:bg-yellow-700 transition duration-300">
                                                <i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit
                                            </a>
                                            <form method="POST" action="{{ route('course-delete', ['id' => $course->id]) }}" class="inline">
                                                @method('DELETE')
                                                @csrf
                                                <button type="submit" class="bg-red-500 text-white px-2 py-1 rounded hover:bg-red-700 transition duration-300" title="Delete Student" onclick="return confirm('Confirm delete?')">
                                                    <i class="fa fa-trash-o" aria-hidden="true"></i> Delete
                                                </button>
                                            </form>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
