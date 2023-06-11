<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    @if (request()->segment(1) == 'bsit')
                        <p class="text-4xl font-black text-gray-900 text-sky-400">BSIT- YEAR LEVEL</p>
                        <hr>
                        <br>
                        <p class="text-4xl font-black text-gray-900 dark:text-black "> <a
                                href="viewsection?sem=first&Request=bsit-1a&year={{ date('Y') }}"
                                class="hover:text-yellow-400 hover:text-6xl transition duration-300 ease-in-out">BSIT-1A</a>
                        </p>
                        <p>total of student</p>
                        <hr>
                        <br>
                        <p class="text-4xl font-black text-gray-900 dark:text-black"><a
                                href="viewsection?sem=first&Request=bsit-2a&year={{ date('Y') }}"
                                class="hover:text-yellow-400 hover:text-6xl transition duration-300 ease-in-out">BSIT-2A</a>
                        </p>
                        <p>total of student</p>
                        <hr>
                        <br>
                        <p class="text-4xl font-black text-gray-900 dark:text-black"><a
                                href="viewsection?sem=first&Request=bsit-3a&year={{ date('Y') }}"
                                class="hover:text-yellow-400 hover:text-6xl transition duration-300 ease-in-out">BSIT-3A</a>
                        </p>
                        <p>total of student</p>
                        <hr>
                        <br>
                        <p class="text-4xl font-black text-gray-900 dark:text-black"><a
                                href="viewsection?sem=first&Request=bsit-4a&year={{ date('Y') }}"
                                class="hover:text-yellow-400 hover:text-6xl transition duration-300 ease-in-out">BSIT-4A</a>
                        </p>
                        <p>total of student</p>
                        <hr>
                        <br>
                    @elseif(request()->segment(1) == 'bshm')
                        <p class="text-4xl font-black text-gray-900 text-sky-400">BSHM- YEAR LEVEL</p>
                        <hr>
                        <br>
                        <p class="text-4xl font-black text-gray-900 dark:text-black">
                            <a href="viewsection?sem=first&Request=bshm-1a&year={{ date('Y') }}"
                                class="hover:text-yellow-400 hover:text-6xl transition duration-300 ease-in-out">
                                BSHM-1A</a>
                        </p>
                        <p>total of student</p>
                        <hr>
                        <br>
                        <p class="text-4xl font-black text-gray-900 dark:text-black">
                            <a href="viewsection?sem=first&Request=bshm-2a&year={{ date('Y') }}"
                                class="hover:text-yellow-400 hover:text-6xl transition duration-300 ease-in-out">
                                BSHM-2A</a>
                        </p>
                        <p>total of student</p>
                        <hr>
                        <br>
                        <p class="text-4xl font-black text-gray-900 dark:text-black">
                            <a href="viewsection?sem=first&Request=bshm-3a&year={{ date('Y') }}"
                                class="hover:text-yellow-400 hover:text-6xl transition duration-300 ease-in-out">BSHM-3A</a>
                        </p>
                        <p>total of student</p>
                        <hr>
                        <br>
                        <p class="text-4xl font-black text-gray-900 dark:text-black"> <a
                                href="viewsection?sem=first&Request=bshm-4a&year={{ date('Y') }}"
                                class="hover:text-yellow-400 hover:text-6xl transition duration-300 ease-in-out">
                                BSHM-4A</a></p>
                        <p>total of student</p>
                        <hr>
                        <br>
                        @elseif(request()->segment(1) == 'bstm')
                        <p class="text-4xl font-black text-gray-900 text-sky-400">BSTM- YEAR LEVEL</p>
                        <hr>
                        <br>
                        <p class="text-4xl font-black text-gray-900 dark:text-black">
                            <a href="viewsection?sem=first&Request=bstm-1a&year={{ date('Y') }}"
                                class="hover:text-yellow-400 hover:text-6xl transition duration-300 ease-in-out">
                                BSTM-1A</a>
                        </p>
                        <p>total of student</p>
                        <hr>
                        <br>
                        <p class="text-4xl font-black text-gray-900 dark:text-black">
                            <a href="viewsection?sem=first&Request=bstm-2a&year={{ date('Y') }}"
                                class="hover:text-yellow-400 hover:text-6xl transition duration-300 ease-in-out">
                                BSTM-2A</a>
                        </p>
                        <p>total of student</p>
                        <hr>
                        <br>
                        <p class="text-4xl font-black text-gray-900 dark:text-black">
                            <a href="viewsection?sem=first&Request=bstm-3a&year={{ date('Y') }}"
                                class="hover:text-yellow-400 hover:text-6xl transition duration-300 ease-in-out">BSTM-3A</a>
                        </p>
                        <p>total of student</p>
                        <hr>
                        <br>
                        <p class="text-4xl font-black text-gray-900 dark:text-black"> <a
                                href="viewsection?sem=first&Request=bstm-4a&year={{ date('Y') }}"
                                class="hover:text-yellow-400 hover:text-6xl transition duration-300 ease-in-out">
                                BSTM-4A</a></p>
                        <p>total of student</p>
                        <hr>
                        <br>
                    @endif

                </div>
            </div>
        </div>
</x-app-layout>
