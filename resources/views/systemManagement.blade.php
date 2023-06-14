<x-app-layout>
    <div class="py-12 bg-white-100">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 bg-white-100">
            <div class="bg-white-100 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="flex flex-col">
                    <div class="overflow-x-auto sm:-mx-6 lg:-mx-8">
                        <div class="inline-block min-w-full py-2 sm:px-6 lg:px-8">
                            <center>
                                <h1 class="text-xl">FOR THE COURSE REGISTRATION</h1>
                            </center>
                            <hr>
                            <br>
                            <div class="overflow-hidden">
                                <div class="flex items-center">
                                    <button id="modal-open1"
                                        class="bg-gray-700 hover:bg-gray-500 text-white font-bold py-2 px-4 rounded">
                                        Register Course
                                    </button>
                                    <div class="input-group ml-4">
                                        <input type="search" class="form-control rounded myInput" placeholder="Search"
                                            aria-label="Search" aria-describedby="search-addon" />
                                    </div>
                                </div>
                                <br>
                                <hr>
                                <table class="min-w-full text-left text-sm font-light myTable">
                                    <thead class="border-b font-medium dark:border-neutral-500">
                                        <tr>
                                            <th scope="col" class="px-6 py-4">ID</th>
                                            <th scope="col" class="px-6 py-4">Course Title</th>
                                            <th scope="col" class="px-6 py-4">Course Name</th>
                                            <th scope="col" class="px-6 py-4">Educational Stage</th>
                                            <th scope="col" class="px-6 py-4">Status</th>
                                            <th scope="col" class="px-6 py-4">Date Added</th>
                                            <th scope="col" class="px-6 py-4">Action</th>
                                        </tr>
                                    </thead>
                                    @if ($course->count() > 0)
                                        @foreach ($course as $item)
                                            <tbody>
                                                <tr class="border-b border-black">
                                                    <td class="whitespace-nowrap px-6 py-4 font-medium">
                                                        {{ $item->id }}</td>
                                                    <td class="whitespace-nowrap px-6 py-4 font-medium">
                                                        {{ $item->Course_label }}</td>
                                                    <td class="whitespace-nowrap px-6 py-4 font-medium">
                                                        {{ $item->Course_name }}</td>
                                                    <td class="whitespace-nowrap px-6 py-4 font-medium">
                                                        {{ $item->Designated_name }}</td>
                                                    <td class="whitespace-nowrap px-6 py-4 font-medium">
                                                        @if ($item->status == 'active')
                                                            active
                                                        @else
                                                            not active
                                                        @endif
                                                    </td>
                                                    <td class="whitespace-nowrap px-6 py-4 font-medium">
                                                        {{ $item->created_at->format('Y-m-d') }}</td>
                                                    <td class="whitespace-nowrap px-6 py-4 font-medium">
                                                        <button id="modal-open3" class="edit-course"
                                                            data-id={{ $item->id }}>
                                                            <svg fill="none" class="w-7 h-7" stroke="currentColor"
                                                                stroke-width="1.5" viewBox="0 0 25 25"
                                                                xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                                    d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L10.582 16.07a4.5 4.5 0 01-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 011.13-1.897l8.932-8.931zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0115.75 21H5.25A2.25 2.25 0 013 18.75V8.25A2.25 2.25 0 015.25 6H10">
                                                                </path>
                                                            </svg>
                                                        </button>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        @endforeach
                                    @else
                                        <tr>
                                            <td class="bg-gray-200 text-gray-500 font-medium text-center py-4"
                                                colspan="8">No course on the list</td>
                                        </tr>
                                    @endif
                                </table>
                                <br>
                                {{-- {{ $course->links() }} --}}
                                <br>
                                <hr><br>
                                <center>
                                    <h1 class="text-xl">FOR THE SECTION REGISTRATION</h1>
                                </center>
                                <hr>
                                <br>
                                <div class="overflow-hidden">
                                    <div class="flex items-center">
                                        <button id="modal-open2"
                                            class="bg-gray-700 hover:bg-gray-500 text-white font-bold py-2 px-4 rounded">
                                            Register Section
                                        </button>
                                        <div class="input-group ml-4">
                                            <input type="search" class="form-control rounded myInput"
                                                placeholder="Search" aria-label="Search"
                                                aria-describedby="search-addon" />
                                        </div>
                                    </div>
                                    <br>
                                    <hr>
                                    <table class="min-w-full text-left text-sm font-light myTable">
                                        <thead class="border-b font-medium dark:border-neutral-500">
                                            <tr>
                                                <th scope="col" class="px-6 py-4">ID</th>
                                                <th scope="col" class="px-6 py-4">Course Title</th>
                                                <th scope="col" class="px-6 py-4">Year Level</th>
                                                <th scope="col" class="px-6 py-4">Status</th>
                                                <th scope="col" class="px-6 py-4">Date Added</th>
                                                <th scope="col" class="px-6 py-4">Action</th>
                                            </tr>
                                        </thead>
                                        @if ($section->count() > 0)
                                            @foreach ($section as $item)
                                                <tbody>
                                                    <tr class="border-b border-black">
                                                        <td class="whitespace-nowrap px-6 py-4 font-medium">
                                                            {{ $item->id }}</td>
                                                        <td class="whitespace-nowrap px-6 py-4 font-medium">
                                                            {{ $item->course->Course_label }}</td>
                                                        <td class="whitespace-nowrap px-6 py-4 font-medium">
                                                            {{ $item->course->Course_name . '-' . $item->year_level }}
                                                        </td>
                                                        <td class="whitespace-nowrap px-6 py-4 font-medium">
                                                            @if ($item->status == 'active')
                                                                active
                                                            @else
                                                                not active
                                                            @endif
                                                        </td>
                                                        <td class="whitespace-nowrap px-6 py-4 font-medium">
                                                            {{ $item->created_at->format('Y-m-d') }}</td>
                                                        <td class="whitespace-nowrap px-6 py-4">
                                                            <button id="modal-open4" class="edit-section"
                                                                data-id={{ $item->id }}>
                                                                <svg fill="none" class="w-7 h-7"
                                                                    stroke="currentColor" stroke-width="1.5"
                                                                    viewBox="0 0 25 25"
                                                                    xmlns="http://www.w3.org/2000/svg"
                                                                    aria-hidden="true">
                                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                                        d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L10.582 16.07a4.5 4.5 0 01-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 011.13-1.897l8.932-8.931zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0115.75 21H5.25A2.25 2.25 0 013 18.75V8.25A2.25 2.25 0 015.25 6H10">
                                                                    </path>
                                                                </svg>
                                                            </button>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            @endforeach
                                        @else
                                            <tr>
                                                <td class="bg-gray-200 text-gray-500 font-medium text-center py-4"
                                                    colspan="8">No section in the list</td>
                                            </tr>
                                        @endif
                                    </table>
                                    <br>
                                    {{-- {{ $section->links() }} --}}
                                    <br>
                                    <hr><br>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div id="modal1" class="fixed inset-0 flex items-center justify-center z-50 hidden">
                <div
                    class="bg-white rounded-lg p-6 w-full sm:w-2/3 lg:w-1/2 xl:w-1/3 border-4 border-blue-500 max-h-screen overflow-y-auto">
                    <!-- Modal Content -->
                    <h2 class="text-xl font-bold mb-4 text-sky-500">Register Course</h2>
                    <form method="POST" action="/addCourses">
                        @csrf
                        <div class="mb-4">
                            <label for="last-name" class="block mb-2">Course Title:</label>
                            <input type="text" name="course_name"
                                class="p-2 border border-gray-300 rounded-lg w-full" required>
                        </div>

                        <div class="mb-4">
                            <label for="last-name" class="block mb-2">Course Name:</label>
                            <input type="text" name="course_title"
                                class="p-2 border border-gray-300 rounded-lg w-full" required>
                        </div>

                        <div class="mb-4">
                            <label for="educational-stage" class="block mb-2">Educational Stage:</label>
                            <select name="designated_name" id="educational-stage"
                                class="rounded border border-gray-300 py-2 px-10">
                                <option value="college">College</option>
                                <option value="shs">Senior High School</option>
                            </select>
                        </div>



                        <div class="flex justify-between">
                            <button id="modal-close1" type="button"
                                class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded">
                                Close Modal
                            </button>

                            {{-- @csrf --}}
                            <button type="submit"
                                class="bg-sky-500 hover:bg-sky-700 text-white font-bold py-2 px-4 rounded">
                                Register
                            </button>
                        </div>
                    </form>
                </div>
            </div>

            <div id="modal2" class="fixed inset-0 flex items-center justify-center z-50 hidden">
                <div
                    class="bg-white rounded-lg p-6 w-full sm:w-2/3 lg:w-1/2 xl:w-1/3 border-4 border-blue-500 max-h-screen overflow-y-auto">
                    <!-- Modal Content -->
                    <h2 class="text-xl font-bold mb-4 text-sky-500">Register Section</h2>

                    <form action="/addClass" method="post">
                        @csrf
                        <div class="mb-4">
                            <label for="class" class="block mb-2">Course Name:</label>
                            <select name="course_id" class="rounded">
                                <optgroup label="For College"> </optgroup>
                                @foreach (\App\Models\CourseSection::select('id', 'Course_name', 'Course_label')->where('Designated_name', 'college')->distinct()->get() as $course)
                                    <option value="{{ $course->id }}"
                                        {{ request('class') == $course->Course_name ? 'selected' : '' }}>
                                        {{ strtoupper($course->Course_name) }}
                                    </option>
                                @endforeach
                                <optgroup label="For Senior Highschool"> </optgroup>
                                @foreach (\App\Models\CourseSection::select('id', 'Course_name', 'Course_label')->where('Designated_name', 'shs')->distinct()->get() as $course)
                                    <option value="{{ $course->id }}"
                                        {{ request('class') == $course->Course_name ? 'selected' : '' }}>
                                        {{ strtoupper($course->Course_name) }}
                                    </option>
                                @endforeach
                            </select>
                        </div>

                        <div class="mb-4">
                            <label for="last-name" class="block mb-2">Year Level:</label>
                            <input type="text" id="last-name" name="year_level"
                                class="p-2 border border-gray-300 rounded-lg w-full modal-student-last_name" required>
                        </div>


                        <div class="flex justify-between">
                            <button id="modal-close2" type="button"
                                class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded">
                                Close Modal
                            </button>

                            {{-- @csrf --}}
                            <button type="submit"
                                class="bg-sky-500 hover:bg-sky-700 text-white font-bold py-2 px-4 rounded">
                                Add Section
                            </button>
                        </div>
                    </form>
                </div>
            </div>


            <div id="modal3" class="fixed inset-0 flex items-center justify-center z-50 hidden">
                <div
                    class="bg-white rounded-lg p-6 w-full sm:w-2/3 lg:w-1/2 xl:w-1/3 border-4 border-blue-500 max-h-screen overflow-y-auto">
                    <!-- Modal Content -->
                    <h2 class="text-xl font-bold mb-4 text-sky-500">Update Course</h2>
                    <form method="POST" action="/updateCourse">
                        @csrf

                        <div class="mb-4">
                            <label for="last-name" class="block mb-2">ID:</label>
                            <input type="text" name="id"
                                class="modal-id p-2 border border-gray-300 rounded-lg w-full disabled" readonly>
                        </div>

                        <div class="mb-4">
                            <label for="last-name" class="block mb-2">Course Title:</label>
                            <input type="text" name="course_title"
                                class="modal-Course_label p-2 border border-gray-300 rounded-lg w-full" required>
                        </div>

                        <div class="mb-4">
                            <label for="last-name" class="block mb-2">Course Name:</label>
                            <input type="text" name="course_name"
                                class="modal-Course_name p-2 border border-gray-300 rounded-lg w-full" required>
                        </div>

                        <div class="mb-4">
                            <label for="educational-stage" class="block mb-2">Educational Stage:</label>
                            <select name="designated_name" id="educational-stage"
                                class="modal-Designated_name rounded border border-gray-300 py-2 px-10">
                                <option value="college">College</option>
                                <option value="shs">Senior High School</option>
                            </select>
                        </div>


                        <div class="mb-4">
                            <label for="status-stage" class="block mb-2">Status:</label>
                            <select name="status" class="modal-status rounded border border-gray-300 py-2 px-10">
                                <option value="active">Active</option>
                                <option value="deactive">Deactivate
                                </option>
                            </select>
                        </div>



                        <div class="flex justify-between">
                            <button id="modal-close3" type="button"
                                class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded">
                                Close Modal
                            </button>

                            <button type="submit"
                                class="bg-sky-500 hover:bg-sky-700 text-white font-bold py-2 px-4 rounded">
                                Update Course
                            </button>
                        </div>
                    </form>
                </div>
            </div>



            <div id="modal4" class="fixed inset-0 flex items-center justify-center z-50 hidden">
                <div
                    class="bg-white rounded-lg p-6 w-full sm:w-2/3 lg:w-1/2 xl:w-1/3 border-4 border-blue-500 max-h-screen overflow-y-auto">
                    <!-- Modal Content -->
                    <h2 class="text-xl font-bold mb-4 text-sky-500">Update Section</h2>

                    <form action="/updateClass" method="post">
                        @csrf

                        <div class="mb-4">
                            <label for="last-name" class="block mb-2">ID:</label>
                            <input type="text" id="last-name" name="id"
                                class="disabled modal-course-id p-2 border border-gray-300 rounded-lg w-full modal-student-last_name"
                                required readonly>
                        </div>

                        <div class="mb-4">
                            <label for="last-name" class="block mb-2">Course Title:</label>
                            <input type="text" id="last-name" name="year_level"
                                class="disabled modal-course-title p-2 border border-gray-300 rounded-lg w-full modal-student-last_name"
                                required readonly>
                        </div>


                        <div class="mb-4">
                            <label for="last-name" class="block mb-2">Course Name:</label>
                            <input type="text" id="last-name" name="year_level"
                                class="disabled modal-course_name p-2 border border-gray-300 rounded-lg w-full modal-student-last_name"
                                required readonly>
                        </div>

                        <div class="mb-4">
                            <label for="last-name" class="block mb-2">Year Level:</label>
                            <input type="text" id="last-name" name="year_level"
                                class="modal-year_level p-2 border border-gray-300 rounded-lg w-full modal-student-last_name"
                                required>
                        </div>

                        <div class="mb-4">
                            <label for="status-stage" class="block mb-2">Status:</label>
                            <select name="status" class="modal-status rounded border border-gray-300 py-2 px-10">
                                <option value="active">Active</option>
                                <option value="deactive">Deactivate
                                </option>
                            </select>
                        </div>


                        <div class="flex justify-between">
                            <button id="modal-close4" type="button"
                                class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded">
                                Close Modal
                            </button>

                            {{-- @csrf --}}
                            <button type="submit"
                                class="bg-sky-500 hover:bg-sky-700 text-white font-bold py-2 px-4 rounded">
                                Update Section
                            </button>
                        </div>
                    </form>
                </div>
            </div>


            <script>
                const modalOpenButton = document.getElementById('modal-open1');
                const modalCloseButton = document.getElementById('modal-close1');
                const modal = document.getElementById('modal1');

                modalOpenButton.addEventListener('click', () => {
                    modal.classList.remove('hidden');
                });

                modalCloseButton.addEventListener('click', () => {
                    modal.classList.add('hidden');
                });


                const modalOpenButton2 = document.getElementById('modal-open2');
                const modalCloseButton2 = document.getElementById('modal-close2');
                const modal2 = document.getElementById('modal2');

                modalOpenButton2.addEventListener('click', () => {
                    modal2.classList.remove('hidden');
                });

                modalCloseButton2.addEventListener('click', () => {
                    modal2.classList.add('hidden');
                });

                // const modalOpenButton3 = document.getElementById('modal-open3');
                // const modalCloseButton3 = document.getElementById('modal-close3');
                // const modal3 = document.getElementById('modal3');

                // modalOpenButton3.addEventListener('click', () => {
                //     modal3.classList.remove('hidden');
                // });

                // modalCloseButton3.addEventListener('click', () => {
                //     modal3.classList.add('hidden');
                // });


                const modalCloseButton3 = document.getElementById('modal-close3');
                const modal3 = document.getElementById('modal3');

                function openModal() {
                    modal3.classList.remove('hidden');
                }

                function closeModal() {
                    modal3.classList.add('hidden');
                }

                modalCloseButton3.addEventListener('click', closeModal);

                var editButtons = document.querySelectorAll('.edit-course');
                editButtons.forEach(function(button) {
                    button.addEventListener('click', function() {
                        // Get the data-id attribute value of the clicked button
                        var studentId = button.getAttribute('data-id');

                        // Perform your desired action for each row individually
                        // Example: Open a modal or perform an edit operation
                        console.log('Clicked button for student ID: ' + studentId);
                        // Add your code here to open the modal or perform the edit operation

                        // Open the modal for the respective row
                        openModal();
                    });
                });

                const modalCloseButton4 = document.getElementById('modal-close4');
                const modal4 = document.getElementById('modal4');

                function openModal1() {
                    modal4.classList.remove('hidden');
                }

                function closeModal1() {
                    modal4.classList.add('hidden');
                }

                modalCloseButton4.addEventListener('click', closeModal1);

                var editButtons = document.querySelectorAll('.edit-section');
                editButtons.forEach(function(button) {
                    button.addEventListener('click', function() {
                        // Get the data-id attribute value of the clicked button
                        var studentId = button.getAttribute('data-id');

                        // Perform your desired action for each row individually
                        // Example: Open a modal or perform an edit operation
                        console.log('Clicked button for student ID: ' + studentId);
                        // Add your code here to open the modal or perform the edit operation

                        // Open the modal for the respective row
                        openModal1();
                    });
                });
            </script>
</x-app-layout>
<style>
    .disabled {
        background-color: #f5f5f5;
        cursor: not-allowed;
    }
</style>
