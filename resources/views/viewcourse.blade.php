<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    @if (auth()->user()->department == 'admin' || auth()->user()->department == 'teacher')
                        @if ($yearLevel->count() > 0)
                            @foreach ($yearLevel as $index => $section)
                                @if ($index === 0)
                                    <p class="text-4xl font-black text-gray-900 text-sky-400">
                                        {{ $section->course->Course_label }}- Year Level</p>
                                    <hr>
                                    <br>
                                @endif
                                <p class="text-4xl font-black text-gray-900 dark:text-black">
                                    <a href="admin&teacherviewsection?sem=first&Request={{ $section->course->Course_name . '-' . $section->year_level }}&year={{ date('Y') }}"
                                        class="hover:text-yellow-400 hover:text-6xl transition duration-300 ease-in-out">
                                        {{ strtoupper($section->course->Course_name . '-' . $section->year_level) }}</a>
                                </p>
                                <p class="text-gray-600 dark:text-gray-400">This class is for
                                    {{ $section->course->Course_name . '-' . $section->year_level }} students.</p>
                                <hr>
                                <br>
                            @endforeach
                        @else
                            <p>No year levels found.</p>
                        @endif
                    @else
                        @if ($yearLevel->count() > 0)
                            @foreach ($yearLevel as $index => $section)
                                @if ($index === 0)
                                    <p class="text-4xl font-black text-gray-900 text-sky-400">
                                        {{ $section->course->Course_label }}- Year Level</p>
                                    <hr>
                                    <br>
                                @endif
                                <p class="text-4xl font-black text-gray-900 dark:text-black">
                                    <a href="viewsection?sem=first&Request={{ $section->course->Course_name . '-' . $section->year_level }}&year={{ date('Y') }}"
                                        class="hover:text-yellow-400 hover:text-6xl transition duration-300 ease-in-out">
                                        {{ strtoupper($section->course->Course_name . '-' . $section->year_level) }}</a>
                                </p>
                                <p class="text-gray-600 dark:text-gray-400">This class is for
                                    {{ $section->course->Course_name . '-' . $section->year_level }} students.</p>
                                <hr>
                                <br>
                            @endforeach
                        @else
                            <p>No year levels found.</p>
                        @endif
                    @endif

                </div>
            </div>
        </div>
</x-app-layout>
