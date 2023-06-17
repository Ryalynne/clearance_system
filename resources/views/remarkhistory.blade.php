<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ 'REMARKS HISTORY FOR ' . strtoupper(auth()->user()->department) . ' DEPARTMENT' }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="flex space-x-4">
                <form method="get" class="flex space-x-4">
                    <input type="number" name="year" value="{{ request('year') }}" placeholder="Year" class="rounded" id="year-input"/>
                    <select name="class" class="rounded" id="class-input">
                        <option value="">Select Class</option>
                        <optgroup label="For College"> </optgroup>
                        @foreach (\App\Models\CourseSection::select('Course_name', 'Course_label')->where('Designated_name', 'college')->distinct()->get() as $course)
                            <option value="{{ $course->Course_name }}"
                                {{ request('class') == $course->Course_name ? 'selected' : '' }}>
                                {{ strtoupper($course->Course_label) }}
                            </option>
                        @endforeach
                        <optgroup label="For Senior Highschool"> </optgroup>
                        @foreach (\App\Models\CourseSection::select('Course_name', 'Course_label')->where('Designated_name', 'shs')->distinct()->get() as $course)
                            <option value="{{ $course->Course_name }}"
                                {{ request('class') == $course->Course_name ? 'selected' : '' }}>
                                {{ strtoupper($course->Course_label) }}
                            </option>
                        @endforeach
                    </select>

                    <select name="section" class="rounded" id="section-input">
                        <option value="">Select Section</option>
                        @foreach (\App\Models\year_level::select('year_level')->distinct()->get() as $course)
                            <option value="{{ $course->year_level }}"
                                {{ request('section') == $course->year_level ? 'selected' : '' }}>
                                {{ strtoupper($course->year_level) }}
                            </option>
                        @endforeach
                    </select>

                    <x-primary-button type="submit">
                        {{ __('FILTER') }}
                    </x-primary-button>

                    <select id="semesterSelect" class="rounded">
                        <option value="">Select Semester</option>
                        <option value="first">First Semester</option>
                        <option value="second">Second Semester</option>
                    </select>

                </form>

                <div class="ml-4">
                    <div class="input-group">
                        <input type="search" class="form-control rounded myInput" placeholder="Search"
                            aria-label="Search" aria-describedby="search-addon" />
                    </div>
                </div>

                <x-primary-button class="ml-3" id="print-modal">
                    {{ __('PRINT') }}
                </x-primary-button>

            </div>
            <br>
            <div class="overflow-x-auto">
                <table class="min-w-full bg-white border-collapse border border-black" id="studentTable">
                    <thead>
                        <tr class="bg-blue-500 text-white">
                            <th scope="col" class="px-4 py-2 border-r border-b">Student Number</th>
                            <th scope="col" class="px-4 py-2 border-r border-b">First Name</th>
                            <th scope="col" class="px-4 py-2 border-r border-b">Middle Name</th>
                            <th scope="col" class="px-4 py-2 border-r border-b">Last Name</th>
                            <th scope="col" class="px-4 py-2 border-r border-b">School Year</th>
                            <th scope="col" class="px-4 py-2 border-r border-b">Class</th>
                            <th scope="col" class="px-4 py-2 border-r border-b">Semester</th>
                            <th scope="col" class="px-4 py-2 border-r border-b">Date Cleared</th>
                            <th scope="col" class="px-4 py-2 border-r border-b">Remarks</th>
                            <th scope="col" class="px-4 py-2 border-b">Remarks For Cleared</th>
                        </tr>
                    </thead>
                    <tbody>
                        @if ($remarks->count() > 0)
                            @foreach ($remarks as $index => $item)
                                <tr class="{{ $index % 2 == 0 ? 'bg-gray-100' : 'bg-gray-300' }}">
                                    <td class="px-4 py-2 border-b border-r">{{ $item->student_number }}</td>
                                    <td class="px-4 py-2 border-b border-r">{{ $item->first_name }}</td>
                                    <td class="px-4 py-2 border-b border-r">{{ $item->middle_name }}</td>
                                    <td class="px-4 py-2 border-b border-r">{{ $item->last_name }}</td>
                                    <td class="px-4 py-2 border-b border-r">{{ $item->school_year }}</td>
                                    <td class="px-4 py-2 border-b border-r">{{ $item->class }}</td>
                                    <td class="px-4 py-2 border-b border-r">{{ $item->semester }}</td>
                                    <td class="px-4 py-2 border-b border-r">
                                        {{ \Carbon\Carbon::parse($item->updated_at)->format('Y-m-d') }}</td>
                                    <td class="px-4 py-2 border-b border-r">{{ $item->remarks }}</td>
                                    <td class="px-4 py-2 border-b">{{ $item->doneremarks }}</td>
                                </tr>
                            @endforeach
                        @else
                            <tr>
                                <td class="bg-gray-200 text-gray-500 font-medium text-center py-4" colspan="10">No
                                    Remove Remark Found</td>
                            </tr>
                        @endif
                    </tbody>
                </table>
            </div>
            {{ $remarks->links() }}

        </div>
    </div>
    </div>


    <div id="print-modal1" class="fixed inset-0 flex items-center justify-center hidden">
        <div class="bg-white rounded-lg p-6 absolute top-0 left-0 right-0 bottom-0">
            <!-- Modal Content -->            
            <h2 class="text-xl font-bold mb-4 text-black" style="position: relative;">
                PRINT WITH REMARKS STUDENT
                <button id="exit-button" class="custom-button bg-gray-400 px-4 mt-1 rounded-md text-black" style="position: absolute; right: 0;">X</button>
            </h2>
            <embed id="table-frame" src="" frameborder="0" width="100%" height="650">
        </div>
    </div>

</x-app-layout>
<script>
    const select = document.getElementById('semesterSelect');
    const table = document.getElementById('studentTable');
    const rows = table.getElementsByTagName('tr');

    // Retrieve the previously selected value from localStorage, if any
    const selectedValue = localStorage.getItem('selectedSemester');
    select.value = selectedValue;

    filterTable(selectedValue);

    select.addEventListener('change', function() {
        const selectedValue = this.value;

        // Store the selected value in localStorage
        localStorage.setItem('selectedSemester', selectedValue);

        filterTable(selectedValue);
    });

    function filterTable(selectedValue) {
        for (let i = 1; i < rows.length; i++) {
            const row = rows[i];
            const semesterCell = row.cells[6]; // Assuming the semester cell is the 7th cell (index 6) in each row

            if (selectedValue === '' || selectedValue === semesterCell.textContent) {
                row.style.display = '';
            } else {
                row.style.display = 'none';
            }
        }
    }



    $('#exit-button').on('click', function() {
        $('#print-modal1').addClass('hidden');
    });


    const modalOpenButtonprint = document.getElementById('print-modal');
    const modalprint = document.getElementById('print-modal1');

    modalOpenButtonprint.addEventListener('click', () => {
        modalprint.classList.remove('hidden');
    });


    $('#print-modal').on('click', function() {
        const frame = $('#table-frame');

        const year = $('#year-input').val();    
        const class1 = $('#class-input').val() || "all"; // Set default value to empty string if null or empty
        const section = $('#section-input').val() || "all";
        const sem = $('#semesterSelect').val() || "all";

        const link = '/remark-pdf/' + year + "/" + class1 + "/" + section + "/" + sem;
        frame.attr('src', link);
    });

</script>
