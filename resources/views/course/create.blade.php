<x-app-layout>
    <x-slot name="header">
        {{-- <h2 class="font-semibold text-xl text-black dark:text-gray-200 leading-tight">
            {{ __('Student Management') }}
        </h2> --}}
        <h2 class="font-semibold text-xl text-black dark:text-gray-500 leading-tight">{{ __('Create Course') }}</h2>
    </x-slot>

    <div class="py-12 ">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 flex justify-center w-full">
            <div class="w-full max-w-sm p-4 bg-white border border-gray-200 rounded-lg shadow sm:p-6 md:p-8 dark:bg-gray-800 dark:border-gray-700">
                <form class="space-y-6" action="{{ route('course-create') }}" method="POST">
                    @csrf
                    <h5 class="text-xl font-medium text-gray-900 dark:text-white">Create Course</h5>
                    <div>
                        <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Your name</label>
                        <input type="name" name="name" id="name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"  required />
                    </div>
                    <div>
                        <label for="syllabus" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Your syllabus</label>
                        <input type="syllabus" name="syllabus" id="syllabus"  class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" required />
                    </div>
                    <div>
                        <label for="duration" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Your duration</label>
                        <input type="duration" name="duration" id="duration"  class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" required />
                    </div>

                    <button type="submit" class="w-full text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Save</button>

                </form>
            </div>
        </div>
    </div>

</x-app-layout>
