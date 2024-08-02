<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-black dark:text-gray-500 leading-tight">{{ __('Course Page') }}</h2>
    </x-slot>

    <div class="py-12 ">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 flex justify-center w-full">
            <div class="w-full max-w-sm p-4 bg-white border border-gray-200 rounded-lg shadow sm:p-6 md:p-8 dark:bg-gray-800 dark:border-gray-700">
                <a href="#" class="block max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700 text-center">
                    <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Course</h5>
                    <p class="font-normal text-gray-700 dark:text-gray-400">Name: {{$course->name}}</p>
                    <p class="font-normal text-gray-700 dark:text-gray-400">Syllabus: {{$course->syllabus}}</p>
                    <p class="font-normal text-gray-700 dark:text-gray-400">Duration: {{$course->duration}}-Year</p>
                </a>
            </div>
        </div>
    </div>

</x-app-layout>
