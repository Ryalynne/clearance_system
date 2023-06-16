<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Courses') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <p class="text-4xl font-black text-gray-900 text-sky-400">FOR COLLEGE</p>
                    <hr>
                    <br>
                    @if ($collegeCourses->count() > 0)

                        @foreach ($collegeCourses as $course)
                            <p class="text-4xl font-black text-gray-900 dark:text-black">
                                <a href="viewcourse?course={{ $course->Course_name }}"
                                    class="hover:text-yellow-400 hover:text-6xl transition duration-300 ease-in-out">{{ $course->Course_label }}</a>
                            </p>
                            <p>Total students this year: <span
                                    style="color: rgb(255, 61, 39);">{{ $course->countStudents() }}</span></p>
                            <hr>
                            <br>
                        @endforeach
                    @else
                        <p class="text-4xl font-black text-gray-900 dark:text-black">
                        <p class="hover:text-yellow-400 hover:text-6xl transition duration-300 ease-in-out">No
                            Courses Found</p>
                        </p>
                    @endif
                    <p class="text-4xl font-black text-gray-900 text-sky-400">FOR SENIOR HIGHSCHOOL</p>
                    <hr>
                    <br>
                    @if ($shsCourses->count() > 0)
                        @foreach ($shsCourses as $course)
                            <p class="text-4xl font-black text-gray-900 dark:text-black">
                                <a href="viewcourse?course={{ $course->Course_name }}"
                                    class="hover:text-yellow-400 hover:text-6xl transition duration-300 ease-in-out">{{ $course->Course_label }}</a>
                            </p>
                            <p>total of student this year: <span
                                    style="color: rgb(255, 61, 39);">{{ $course->countStudents() }}</span></p>
                            <hr>
                            <br>
                        @endforeach
                    @else
                        <p class="text-4xl font-black text-gray-900 dark:text-black">
                        <p class="hover:text-yellow-400 hover:text-6xl transition duration-300 ease-in-out">No
                            Courses Found</p>
                        </p>
                    @endif
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
