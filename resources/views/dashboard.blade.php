@if (auth()->user()->department == 'admin')
    <x-app-layout>
        <hr>
        <div class="py-12 bg-white-100">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 bg-white-100">
                <div class="bg-white-100 overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="flex flex-col">
                        <div class="overflow-x-auto sm:-mx-6 lg:-mx-8">
                            <div class="inline-block min-w-full py-2 sm:px-6 lg:px-8">
                                <center>
                                    <h1 class="text-xl">FOR THE STUDENTS ENROLLMENT</h1>
                                </center>
                                <hr>
                                <br>
                                <div class="overflow-hidden">
                                    <div class="flex items-center">
                                        <button id="modal-open"
                                            class="bg-gray-700 hover:bg-gray-500 text-white font-bold py-2 px-4 rounded">
                                            Register Student
                                        </button>
                                        <form action="{{ route('upload.users') }}" method="POST"
                                            enctype="multipart/form-data" class="ml-4">
                                            @csrf
                                            <div class="flex items-center">
                                                <input type="file" name="file"
                                                    class="border border-gray-300 px-4 py-2 rounded">
                                                <button type="submit"
                                                    class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded ml-2">
                                                    Upload
                                                </button>
                                            </div>
                                        </form>
                                    </div>
                                    <!-- Modal -->
                                    <div id="modal"
                                        class="fixed inset-0 flex items-center justify-center z-50 hidden">
                                        <div
                                            class="bg-white rounded-lg p-6 w-full sm:w-2/3 lg:w-1/2 xl:w-1/3 border-4 border-blue-500 max-h-screen overflow-y-auto">
                                            <!-- Modal Content -->
                                            <h2 class="text-xl font-bold mb-4 text-sky-500">Register Student</h2>
                                            <!-- Student Form -->
                                            <form method="POST" action="/registerStudent">
                                                @csrf
                                                <div class="mb-4">
                                                    <label for="student_number" class="block mb-2">Student
                                                        Number:</label>
                                                    <input type="number" id="student_number" name="student_number"
                                                        class="p-2 border border-gray-300 rounded-lg w-full" required>
                                                </div>

                                                <div class="mb-4">
                                                    <label for="first-name" class="block mb-2">First Name:</label>
                                                    <input type="text" id="first-name" name="first_name"
                                                        class="p-2 border border-gray-300 rounded-lg w-full" required>
                                                </div>

                                                <div class="mb-4">
                                                    <label for="middle-name" class="block mb-2">Middle Name:</label>
                                                    <input type="text" id="middle-name" name="middle_name"
                                                        class="p-2 border border-gray-300 rounded-lg w-full" required>
                                                </div>

                                                <div class="mb-4">
                                                    <label for="last-name" class="block mb-2">Last Name:</label>
                                                    <input type="text" id="last-name" name="last_name"
                                                        class="p-2 border border-gray-300 rounded-lg w-full" required>
                                                </div>

                                                <div class="mb-4">
                                                    <label for="sem" class="block mb-2">Semester:</label>
                                                    <select name="semester">
                                                        <option value="first">
                                                            First
                                                        </option>
                                                        <option value="second">
                                                            Second
                                                        </option>
                                                    </select>
                                                </div>

                                                <div class="mb-4">
                                                    <label for="year" class="block mb-2">School Year:</label>
                                                    <input type="number" id="year" name="school_year"
                                                        pattern="[0-9]{4}"
                                                        class="p-2 border border-gray-300 rounded-lg w-full" required
                                                        value="{{ date('Y') }}">
                                                    <p class="text-sm text-gray-500 mt-1">Please enter the year in the
                                                        format
                                                        YYYY (e.g., 2023).</p>
                                                </div>

                                                <div class="mb-4">
                                                    <label for="class" class="block mb-2">Class:</label>
                                                    <select name="class">
                                                        <option value="bsit">
                                                            BSIT
                                                        </option>
                                                        <option value="bshm">
                                                            BSHM
                                                        </option>
                                                        <option value="bstm">
                                                            BSTM
                                                        </option>
                                                        <option value="bsais">
                                                            BSAIS
                                                        </option>
                                                        <option value="bsba">
                                                            BSBA
                                                        </option>
                                                        <option value="act">
                                                            ACT
                                                        </option>
                                                        <option value="abm">
                                                            ABM
                                                        </option>
                                                        <option value="stem">
                                                            STEM
                                                        </option>
                                                        <option value="humss">
                                                            HUMSS
                                                        </option>
                                                        <option value="ga">
                                                            GA
                                                        </option>
                                                        <option value="it">
                                                            IT
                                                        </option>
                                                        <option value="to">
                                                            TO
                                                        </option>
                                                        <option value="ca">
                                                            CA
                                                        </option>
                                                    </select>
                                                </div>

                                                <div class="mb-4">
                                                    <label for="section" class="block mb-2">Section:</label>
                                                    <select name="section">
                                                        <option value="1-a">
                                                            1-A
                                                        </option>
                                                        <option value="2-a">
                                                            2-A
                                                        </option>
                                                        <option value="3-a">
                                                            3-A
                                                        </option>
                                                        <option value="4-a">
                                                            4-A
                                                        </option>
                                                    </select>
                                                </div>


                                                <div class="flex justify-between">
                                                    <button id="modal-close"
                                                        class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded">
                                                        Close Modal
                                                    </button>

                                                    <button type="submit"
                                                        class="bg-sky-500 hover:bg-sky-700 text-white font-bold py-2 px-4 rounded">
                                                        Register
                                                    </button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>

                                    <hr>
                                    <table class="min-w-full text-left text-sm font-light">
                                        <thead class="border-b font-medium dark:border-neutral-500">
                                            <tr>
                                                <th scope="col" class="px-6 py-4">Student Number</th>
                                                <th scope="col" class="px-6 py-4">First Name</th>
                                                <th scope="col" class="px-6 py-4">Middle Name</th>
                                                <th scope="col" class="px-6 py-4">Last Name</th>
                                                <th scope="col" class="px-6 py-4">Semester</th>
                                                <th scope="col" class="px-6 py-4">School Year</th>
                                                <th scope="col" class="px-6 py-4">Class</th>
                                                <th scope="col" class="px-6 py-4">Date Added</th>
                                                <th scope="col" class="px-6 py-4">Action</th>
                                            </tr>
                                        </thead>
                                        @foreach ($student as $list)
                                            <tbody>
                                                <tr class="border-b dark:border-neutral-500">
                                                    <td class="whitespace-nowrap px-6 py-4 font-medium">
                                                        {{ $list->student_number }}</td>
                                                    <td class="whitespace-nowrap px-6 py-4">{{ $list->first_name }}
                                                    </td>
                                                    <td class="whitespace-nowrap px-6 py-4">{{ $list->middle_name }}
                                                    </td>
                                                    <td class="whitespace-nowrap px-6 py-4">{{ $list->last_name }}</td>
                                                    <td class="whitespace-nowrap px-6 py-4">
                                                        {{ $list->enrollment->semester }}
                                                    </td>
                                                    <td class="whitespace-nowrap px-6 py-4">
                                                        {{ $list->enrollment->school_year }}</td>
                                                    <td class="whitespace-nowrap px-6 py-4">
                                                        {{ $list->enrollment->class }}
                                                    </td>
                                                    <td class="whitespace-nowrap px-6 py-4">{{ $list->created_at }}
                                                    </td>
                                                    <td class="whitespace-nowrap px-6 py-4">
                                                        <button>
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
                                    </table>
                                    <br>
                                    {{ $student->links() }}
                                </div>
                                <br><br>
                                <center>
                                    <h1 class="text-xl">FOR THE DEPARTMENTS ACCOUNT</h1>
                                </center>
                                <hr>
                                <br>
                                <div class="overflow-hidden">
                                    <!-- Trigger Button -->
                                    <button id="modal-open1"
                                        class="bg-gray-700 hover:bg-gray-500 text-white font-bold py-2 px-4 rounded">
                                        Register Department
                                    </button>

                                    <div id="modal1"
                                        class="fixed inset-0 flex items-center justify-center z-50 hidden">
                                        <div
                                            class="bg-white rounded-lg p-6 w-full sm:w-2/3 lg:w-1/2 xl:w-1/3 border-4 border-blue-500 max-h-screen overflow-y-auto">
                                            <!-- Modal Content -->
                                            <h2 class="text-xl font-bold mb-4 text-sky-500">Register Department</h2>
                                            <!-- Student Form -->
                                            <form method="POST" action="/registerUser">
                                                @csrf
                                                <div class="mb-4">
                                                    <label for="first-name" class="block mb-2">Full Name:</label>
                                                    <input type="text" id="first-name" name="full_name"
                                                        class="p-2 border border-gray-300 rounded-lg w-full" required>
                                                </div>

                                                <div class="mb-4">
                                                    <label for="first-name" class="block mb-2">Email:</label>
                                                    <input type="email" id="first-name" name="email"
                                                        class="p-2 border border-gray-300 rounded-lg w-full" required>
                                                </div>

                                                <div class="mb-4">
                                                    <label for="department" class="block mb-2">Department:</label>
                                                    <select name="department" id="department"
                                                        class="p-2 border border-gray-300 rounded-lg w-full" required>
                                                        <option value="dean">Dean</option>
                                                        <option value="library">Library</option>
                                                        <option value="guidance">Guidance Counselor</option>
                                                        <option value="alumni">Alumni and Placement</option>
                                                        <option value="discipline">Prefect of Discipline and Student
                                                            Affairs</option>
                                                        <option value="accounting">Accounting Office</option>
                                                    </select>
                                                </div>

                                                <div class="mb-4">
                                                    <label for="password" class="block mb-2">Password:</label>
                                                    <input type="password" id="password" name="password"
                                                        autocomplete="new-password"
                                                        class="p-2 border border-gray-300 rounded-lg w-full" required>
                                                </div>

                                                <div class="mb-4">
                                                    <label for="confirm-password" class="block mb-2">Confirm
                                                        Password:</label>
                                                    <input type="password" id="confirm-password"
                                                        name="confirm_password"
                                                        class="p-2 border border-gray-300 rounded-lg w-full" required>
                                                </div>

                                                <div class="flex justify-between">
                                                    <button id="modal-close1"
                                                        class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded">
                                                        Close Modal
                                                    </button>

                                                    <button type="submit"
                                                        class="bg-sky-500 hover:bg-sky-700 text-white font-bold py-2 px-4 rounded">
                                                        Register
                                                    </button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                    <br><br>
                                    <hr>
                                    <table class="min-w-full text-left text-sm font-light">
                                        <thead class="border-b font-medium dark:border-neutral-500">
                                            <tr>
                                                <th scope="col" class="px-6 py-4">Full Name</th>
                                                <th scope="col" class="px-6 py-4">Department</th>
                                                <th scope="col" class="px-6 py-4">Email</th>
                                                <th scope="col" class="px-6 py-4">Date Added</th>
                                                <th scope="col" class="px-6 py-4">Action</th>
                                            </tr>
                                        </thead>
                                        @foreach ($department as $list)
                                            <tbody>
                                                <tr class="border-b dark:border-neutral-500">
                                                    <td class="whitespace-nowrap px-6 py-4 font-medium">
                                                        {{ $list->name }}</td>
                                                    <td class="whitespace-nowrap px-6 py-4">{{ $list->department }}
                                                    </td>
                                                    <td class="whitespace-nowrap px-6 py-4">{{ $list->email }}</td>
                                                    <td class="whitespace-nowrap px-6 py-4">{{ $list->created_at }}
                                                    </td>
                                                    <td class="whitespace-nowrap px-6 py-4">
                                                        <button>
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
                                    </table>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <script>
            const passwordInput = document.getElementById('password');
            const confirmPasswordInput = document.getElementById('confirm-password');

            function validatePassword() {
                const password = passwordInput.value;
                const confirmPassword = confirmPasswordInput.value;

                if (password.length <= 6) {
                    passwordInput.setCustomValidity("Password must be at least 6 characters long");
                } else if (password !== confirmPassword) {
                    confirmPasswordInput.setCustomValidity("Passwords do not match");
                } else {
                    passwordInput.setCustomValidity("");
                    confirmPasswordInput.setCustomValidity("");
                }
            }

            passwordInput.addEventListener('change', validatePassword);
            confirmPasswordInput.addEventListener('keyup', validatePassword);




            const modalOpenButton = document.getElementById('modal-open');
            const modalCloseButton = document.getElementById('modal-close');
            const modal = document.getElementById('modal');

            modalOpenButton.addEventListener('click', () => {
                modal.classList.remove('hidden');
            });

            modalCloseButton.addEventListener('click', () => {
                modal.classList.add('hidden');
            });


            const modalOpenButton1 = document.getElementById('modal-open1');
            const modalCloseButton1 = document.getElementById('modal-close1');
            const modal1 = document.getElementById('modal1');

            modalOpenButton1.addEventListener('click', () => {
                modal1.classList.remove('hidden');
            });

            modalCloseButton1.addEventListener('click', () => {
                modal1.classList.add('hidden');
            });
        </script>
    </x-app-layout>
@else
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
                        <p class="text-4xl font-black text-gray-900 dark:text-black">
                            <a href="bsit"
                                class="hover:text-yellow-400 hover:text-6xl transition duration-300 ease-in-out">BS
                                Information Technology (BSIT)</a>
                        </p>
                        <p>total of student this year : <span style="color: rgb(255, 61, 39);">{{ $bsit }}</p>
                        <hr>
                        <br>
                        <p class="text-4xl font-black text-gray-900 dark:text-black">
                            <a href="bshm"
                                class="hover:text-yellow-400 hover:text-6xl transition duration-300 ease-in-out">BS
                                Hospitality Management (BSHM)</a>
                        </p>
                        <p>total of student this year : <span
                                style="color: rgb(255, 61, 39);">{{ $bshm }}</span></p>
                        <hr>
                        <br>
                        <p class="text-4xl font-black text-gray-900 dark:text-black">
                            <a href="bstm"
                                class="hover:text-yellow-400 hover:text-6xl transition duration-300 ease-in-out">BS
                                Tourism
                                Management (BSTM)</a>
                        </p>
                        <p>total of student this year : <span
                                style="color: rgb(255, 61, 39);">{{ $bstm }}</span></p>
                        <hr>
                        <br>
                        <p class="text-4xl font-black text-gray-900 dark:text-black">
                            <a href="bsais"
                                class="hover:text-yellow-400 hover:text-6xl transition duration-300 ease-in-out">BS
                                Accounting Information System (BSAIS)</a>
                        </p>
                        <p>total of student this year : <span
                                style="color: rgb(255, 61, 39);">{{ $bsais }}</span></p>
                        <hr>
                        <br>
                        <p class="text-4xl font-black text-gray-900 dark:text-black">
                            <a href="bsba"
                                class="hover:text-yellow-400 hover:text-6xl transition duration-300 ease-in-out">BS
                                Business
                                Administration (BSBA)</a>
                        </p>
                        <p>total of student this year : <span
                                style="color: rgb(255, 61, 39);">{{ $bsba }}</span></p>
                        <hr>
                        <br>
                        <p class="text-4xl font-black text-gray-900 dark:text-black">
                            <a href="act"
                                class="hover:text-yellow-400 hover:text-6xl transition duration-300 ease-in-out">2 yr.
                                Associate in Computer Technology (ACT)</a>
                        </p>
                        <p>total of student this year : <span
                                style="color: rgb(255, 61, 39);">{{ $act }}</span></p>
                        <hr>
                        <br>
                        <p class="text-4xl font-black text-gray-900 text-sky-400">FOR SENIOR HIGHSCHOOL</p>
                        <hr>
                        <br>
                        <p class="text-4xl font-black text-gray-900 dark:text-black">
                            <a href="abm"
                                class="hover:text-yellow-400 hover:text-6xl transition duration-300 ease-in-out">Accountancy,
                                Business, and Management (ABM) </a>
                        </p>
                        <p>total of student this year :</p>
                        <hr>
                        <br>
                        <p class="text-4xl font-black text-gray-900 dark:text-black">
                            <a href="stem"
                                class="hover:text-yellow-400 hover:text-6xl transition duration-300 ease-in-out">Science,
                                Technology, Engineering, and Mathematics (STEM)</a>
                        </p>
                        <p>total of student this year :</p>
                        <hr>
                        <br>
                        <p class="text-4xl font-black text-gray-900 dark:text-black">
                            <a href="humss"
                                class="hover:text-yellow-400 hover:text-6xl transition duration-300 ease-in-out">Humanities
                                and Social Sciences (HUMSS)</a>
                        </p>
                        <p>total of student this year </p>
                        <hr>
                        <br>
                        <p class="text-4xl font-black text-gray-900 dark:text-black">
                            <a href="ga"
                                class="hover:text-yellow-400 hover:text-6xl transition duration-300 ease-in-out">General
                                Academic (GA)</a>
                        </p>
                        <p>total of student this year </p>
                        <hr>
                        <br>
                        <p class="text-4xl font-black text-gray-900 dark:text-black">
                            <a href="it"
                                class="hover:text-yellow-400 hover:text-6xl transition duration-300 ease-in-out">IT in
                                Mobile App and Web Development (IT)</a>
                        </p>
                        <p>total of student this year </p>
                        <hr>
                        <br>
                        <p class="text-4xl font-black text-gray-900 dark:text-black">
                            <a href="to"
                                class="hover:text-yellow-400 hover:text-6xl transition duration-300 ease-in-out">Tourism
                                Operations (TO)</a>
                        </p>
                        <p>total of student this year </p>
                        <hr>
                        <br>
                        <p class="text-4xl font-black text-gray-900 dark:text-black">
                            <a href="ca"
                                class="hover:text-yellow-400 hover:text-6xl transition duration-300 ease-in-out">Culinary
                                Arts (CA)</a>
                        </p>
                        <p>total of student this year </p>
                        <hr>
                    </div>
                </div>
            </div>
        </div>

    </x-app-layout>

@endif
