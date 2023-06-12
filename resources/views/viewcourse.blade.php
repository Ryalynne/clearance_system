<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    @if (request()->segment(1) == 'bsit')
                        <p class="text-4xl font-black text-gray-900 text-sky-400">BS Information Technology (BSIT) - Year Level</p>
                        <hr>
                        <br>
                        <p class="text-4xl font-black text-gray-900 dark:text-black "> <a
                                href="viewsection?sem=first&Request=bsit-1a&year={{ date('Y') }}"
                                class="hover:text-yellow-400 hover:text-6xl transition duration-300 ease-in-out">BSIT-1A</a>
                        </p>
                        <p class="text-gray-600 dark:text-gray-400">This class is for first-year BSIT students.</p>
                        <hr>
                        <br>
                        <p class="text-4xl font-black text-gray-900 dark:text-black"><a
                                href="viewsection?sem=first&Request=bsit-2a&year={{ date('Y') }}"
                                class="hover:text-yellow-400 hover:text-6xl transition duration-300 ease-in-out">BSIT-2A</a>
                        </p>
                        <p class="text-gray-600 dark:text-gray-400">This class is for second-year BSIT students.</p>
                        <hr>
                        <br>
                        <p class="text-4xl font-black text-gray-900 dark:text-black"><a
                                href="viewsection?sem=first&Request=bsit-3a&year={{ date('Y') }}"
                                class="hover:text-yellow-400 hover:text-6xl transition duration-300 ease-in-out">BSIT-3A</a>
                        </p>
                        <p class="text-gray-600 dark:text-gray-400">This class is for third-year BSIT students.</p>
                        <hr>
                        <br>
                        <p class="text-4xl font-black text-gray-900 dark:text-black"><a
                                href="viewsection?sem=first&Request=bsit-4a&year={{ date('Y') }}"
                                class="hover:text-yellow-400 hover:text-6xl transition duration-300 ease-in-out">BSIT-4A</a>
                        </p>
                        <p class="text-gray-600 dark:text-gray-400">This class is for fourth-year BSIT students.</p>
                        <hr>
                        <br>
                    @elseif(request()->segment(1) == 'bshm')
                        <p class="text-4xl font-black text-gray-900 text-sky-400">BS Hospitality Management (BSHM) - Year Level</p>
                        <hr>
                        <br>
                        <p class="text-4xl font-black text-gray-900 dark:text-black">
                            <a href="viewsection?sem=first&Request=bshm-1a&year={{ date('Y') }}"
                                class="hover:text-yellow-400 hover:text-6xl transition duration-300 ease-in-out">
                                BSHM-1A</a>
                        </p>
                          <p class="text-gray-600 dark:text-gray-400">This class is for first-year BSHM students.</p>
                        <hr>
                        <br>
                        <p class="text-4xl font-black text-gray-900 dark:text-black">
                            <a href="viewsection?sem=first&Request=bshm-2a&year={{ date('Y') }}"
                                class="hover:text-yellow-400 hover:text-6xl transition duration-300 ease-in-out">
                                BSHM-2A</a>
                        </p>
                          <p class="text-gray-600 dark:text-gray-400">This class is for second-year BSHM students.</p>
                        <hr>
                        <br>
                        <p class="text-4xl font-black text-gray-900 dark:text-black">
                            <a href="viewsection?sem=first&Request=bshm-3a&year={{ date('Y') }}"
                                class="hover:text-yellow-400 hover:text-6xl transition duration-300 ease-in-out">BSHM-3A</a>
                        </p>
                          <p class="text-gray-600 dark:text-gray-400">This class is for third-year BSHM students.</p>
                        <hr>
                        <br>
                        <p class="text-4xl font-black text-gray-900 dark:text-black"> <a
                                href="viewsection?sem=first&Request=bshm-4a&year={{ date('Y') }}"
                                class="hover:text-yellow-400 hover:text-6xl transition duration-300 ease-in-out">
                                BSHM-4A</a></p>
                          <p class="text-gray-600 dark:text-gray-400">This class is for fourth-year BSHM students.</p>
                        <hr>
                        <br>
                        @elseif(request()->segment(1) == 'bstm')
                        <p class="text-4xl font-black text-gray-900 text-sky-400">BS Tourism Management (BSTM) - YEAR LEVEL</p>
                        <hr>
                        <br>
                        <p class="text-4xl font-black text-gray-900 dark:text-black">
                            <a href="viewsection?sem=first&Request=bstm-1a&year={{ date('Y') }}"
                                class="hover:text-yellow-400 hover:text-6xl transition duration-300 ease-in-out">
                                BSTM-1A</a>
                        </p>
                        <p class="text-gray-600 dark:text-gray-400">This class is for first-year BSTM students.</p>
                        <hr>
                        <br>
                        <p class="text-4xl font-black text-gray-900 dark:text-black">
                            <a href="viewsection?sem=first&Request=bstm-2a&year={{ date('Y') }}"
                                class="hover:text-yellow-400 hover:text-6xl transition duration-300 ease-in-out">
                                BSTM-2A</a>
                        </p>
                        <p class="text-gray-600 dark:text-gray-400">This class is for second-year BSTM students.</p>
                        <hr>
                        <br>
                        <p class="text-4xl font-black text-gray-900 dark:text-black">
                            <a href="viewsection?sem=first&Request=bstm-3a&year={{ date('Y') }}"
                                class="hover:text-yellow-400 hover:text-6xl transition duration-300 ease-in-out">BSTM-3A</a>
                        </p>
                        <p class="text-gray-600 dark:text-gray-400">This class is for third-year BSTM students.</p>
                        <hr>
                        <br>
                        <p class="text-4xl font-black text-gray-900 dark:text-black"> <a
                                href="viewsection?sem=first&Request=bstm-4a&year={{ date('Y') }}"
                                class="hover:text-yellow-400 hover:text-6xl transition duration-300 ease-in-out">
                                BSTM-4A</a></p>
                        <p class="text-gray-600 dark:text-gray-400">This class is for fourth-year BSTM students.</p>
                        <hr>
                        <br>
                        @elseif(request()->segment(1) == 'bsais')
                        <p class="text-4xl font-black text-gray-900 text-sky-400">BS Accounting Information System (BSAIS) - YEAR LEVEL</p>
                        <hr>
                        <br>
                        <p class="text-4xl font-black text-gray-900 dark:text-black">
                            <a href="viewsection?sem=first&Request=bsais-1a&year={{ date('Y') }}"
                                class="hover:text-yellow-400 hover:text-6xl transition duration-300 ease-in-out">
                                BSAIS-1A</a>
                        </p>
                          <p class="text-gray-600 dark:text-gray-400">This class is for first-year BSAIS students.</p>
                        <hr>
                        <br>
                        <p class="text-4xl font-black text-gray-900 dark:text-black">
                            <a href="viewsection?sem=first&Request=bsais-2a&year={{ date('Y') }}"
                                class="hover:text-yellow-400 hover:text-6xl transition duration-300 ease-in-out">
                                BSAIS-2A</a>
                        </p>
                          <p class="text-gray-600 dark:text-gray-400">This class is for second-year BSAIS students.</p>
                        <hr>
                        <br>
                        <p class="text-4xl font-black text-gray-900 dark:text-black">
                            <a href="viewsection?sem=first&Request=bsais-3a&year={{ date('Y') }}"
                                class="hover:text-yellow-400 hover:text-6xl transition duration-300 ease-in-out">BSAIS-3A</a>
                        </p>
                          <p class="text-gray-600 dark:text-gray-400">This class is for third-year BSAIS students.</p>
                        <hr>
                        <br>
                        <p class="text-4xl font-black text-gray-900 dark:text-black"> <a
                                href="viewsection?sem=first&Request=bsais-4a&year={{ date('Y') }}"
                                class="hover:text-yellow-400 hover:text-6xl transition duration-300 ease-in-out">
                                BSAIS-4A</a></p>
                          <p class="text-gray-600 dark:text-gray-400">This class is for fourth-year BSAIS students.</p>
                        <hr>
                        <br>
                        @elseif(request()->segment(1) == 'bsba')
                        <p class="text-4xl font-black text-gray-900 text-sky-400">BS Business Administration (BSBA) - YEAR LEVEL</p>
                        <hr>
                        <br>
                        <p class="text-4xl font-black text-gray-900 dark:text-black">
                            <a href="viewsection?sem=first&Request=bsba-1a&year={{ date('Y') }}"
                                class="hover:text-yellow-400 hover:text-6xl transition duration-300 ease-in-out">
                                BSBA-1A</a>
                        </p>
                          <p class="text-gray-600 dark:text-gray-400">This class is for first-year BSBA students.</p>
                        <hr>
                        <br>
                        <p class="text-4xl font-black text-gray-900 dark:text-black">
                            <a href="viewsection?sem=first&Request=bsba-2a&year={{ date('Y') }}"
                                class="hover:text-yellow-400 hover:text-6xl transition duration-300 ease-in-out">
                                BSBA-2A</a>
                        </p>
                          <p class="text-gray-600 dark:text-gray-400">This class is for second-year BSBA students.</p>
                        <hr>
                        <br>
                        <p class="text-4xl font-black text-gray-900 dark:text-black">
                            <a href="viewsection?sem=first&Request=bsba-3a&year={{ date('Y') }}"
                                class="hover:text-yellow-400 hover:text-6xl transition duration-300 ease-in-out">BSBA-3A</a>
                        </p>
                          <p class="text-gray-600 dark:text-gray-400">This class is for third-year BSBA students.</p>
                        <hr>
                        <br>
                        <p class="text-4xl font-black text-gray-900 dark:text-black"> <a
                                href="viewsection?sem=first&Request=bsba-4a&year={{ date('Y') }}"
                                class="hover:text-yellow-400 hover:text-6xl transition duration-300 ease-in-out">
                                BSBA-4A</a></p>
                          <p class="text-gray-600 dark:text-gray-400">This class is for fourth-year BSBA students.</p>
                        <hr>
                        <br>
                        @elseif(request()->segment(1) == 'act')
                        <p class="text-4xl font-black text-gray-900 text-sky-400">2 yr. Associate in Computer Technology (ACT) - YEAR LEVEL</p>
                        <hr>
                        <br>
                        <p class="text-4xl font-black text-gray-900 dark:text-black">
                            <a href="viewsection?sem=first&Request=act-1a&year={{ date('Y') }}"
                                class="hover:text-yellow-400 hover:text-6xl transition duration-300 ease-in-out">
                                ACT-1A</a>
                        </p>
                          <p class="text-gray-600 dark:text-gray-400">This class is for first-year ACT students.</p>
                        <hr>
                        <br>
                        <p class="text-4xl font-black text-gray-900 dark:text-black">
                            <a href="viewsection?sem=first&Request=act-2a&year={{ date('Y') }}"
                                class="hover:text-yellow-400 hover:text-6xl transition duration-300 ease-in-out">
                                ACT-2A</a>
                        </p>
                          <p class="text-gray-600 dark:text-gray-400">This class is for second-year ACT students.</p>
                        <hr>
                        <br>
                        <p class="text-4xl font-black text-gray-900 dark:text-black">
                            <a href="viewsection?sem=first&Request=act-3a&year={{ date('Y') }}"
                                class="hover:text-yellow-400 hover:text-6xl transition duration-300 ease-in-out">ACT-3A</a>
                        </p>
                          <p class="text-gray-600 dark:text-gray-400">This class is for third-year ACT students.</p>
                        <hr>
                        <br>
                        <p class="text-4xl font-black text-gray-900 dark:text-black"> <a
                                href="viewsection?sem=first&Request=act-4a&year={{ date('Y') }}"
                                class="hover:text-yellow-400 hover:text-6xl transition duration-300 ease-in-out">
                                ACT-4A</a></p>
                          <p class="text-gray-600 dark:text-gray-400">This class is for fourth-year ACT students.</p>
                        <hr>
                        <br>
                        @elseif(request()->segment(1) == 'abm')
                        <p class="text-4xl font-black text-gray-900 text-sky-400">Accountancy, Business, and Management (ABM) - YEAR LEVEL</p>
                        <hr>
                        <br>
                        <p class="text-4xl font-black text-gray-900 dark:text-black">
                            <a href="viewsection?sem=first&Request=abm-1a&year={{ date('Y') }}"
                                class="hover:text-yellow-400 hover:text-6xl transition duration-300 ease-in-out">
                                ABM-1A</a>
                        </p>
                          <p class="text-gray-600 dark:text-gray-400">This class is for first-year ABM students.</p>
                        <hr>
                        <br>
                        <p class="text-4xl font-black text-gray-900 dark:text-black">
                            <a href="viewsection?sem=first&Request=abm-1b&year={{ date('Y') }}"
                                class="hover:text-yellow-400 hover:text-6xl transition duration-300 ease-in-out">
                                ABM-1B</a>
                        </p>
                          <p class="text-gray-600 dark:text-gray-400">This class is for first-year ABM students.</p>
                        <hr>
                        <br>
                        <p class="text-4xl font-black text-gray-900 dark:text-black">
                            <a href="viewsection?sem=first&Request=abm-2a&year={{ date('Y') }}"
                                class="hover:text-yellow-400 hover:text-6xl transition duration-300 ease-in-out">ABM-2A</a>
                        </p>
                          <p class="text-gray-600 dark:text-gray-400">This class is for second-year ABM students.</p>
                        <hr>
                        <br>
                        <p class="text-4xl font-black text-gray-900 dark:text-black"> <a
                                href="viewsection?sem=first&Request=abm-2b&year={{ date('Y') }}"
                                class="hover:text-yellow-400 hover:text-6xl transition duration-300 ease-in-out">
                                ABM-2B</a></p>
                          <p class="text-gray-600 dark:text-gray-400">This class is for second-year ABM students.</p>
                        <hr>
                        <br>
                        @elseif(request()->segment(1) == 'stem')
                        <p class="text-4xl font-black text-gray-900 text-sky-400">Science, Technology, Engineering, and Mathematics (STEM) - YEAR LEVEL</p>
                        <hr>
                        <br>
                        <p class="text-4xl font-black text-gray-900 dark:text-black">
                            <a href="viewsection?sem=first&Request=stem-1a&year={{ date('Y') }}"
                                class="hover:text-yellow-400 hover:text-6xl transition duration-300 ease-in-out">
                                STEM-1A</a>
                        </p>
                          <p class="text-gray-600 dark:text-gray-400">This class is for first-year STEM students.</p>
                        <hr>
                        <br>
                        <p class="text-4xl font-black text-gray-900 dark:text-black">
                            <a href="viewsection?sem=first&Request=stem-1b&year={{ date('Y') }}"
                                class="hover:text-yellow-400 hover:text-6xl transition duration-300 ease-in-out">
                                STEM-1B</a>
                        </p>
                          <p class="text-gray-600 dark:text-gray-400">This class is for second-year STEM students.</p>
                        <hr>
                        <br>
                        <p class="text-4xl font-black text-gray-900 dark:text-black">
                            <a href="viewsection?sem=first&Request=stem-2a&year={{ date('Y') }}"
                                class="hover:text-yellow-400 hover:text-6xl transition duration-300 ease-in-out">STEM-2A</a>
                        </p>
                          <p class="text-gray-600 dark:text-gray-400">This class is for second-year STEM students.</p>
                        <hr>
                        <br>
                        <p class="text-4xl font-black text-gray-900 dark:text-black"> <a
                                href="viewsection?sem=first&Request=stem-2b&year={{ date('Y') }}"
                                class="hover:text-yellow-400 hover:text-6xl transition duration-300 ease-in-out">
                                STEM-2B</a></p>
                          <p class="text-gray-600 dark:text-gray-400">This class is for second-year STEM students.</p>
                        <hr>
                        <br>
                        @elseif(request()->segment(1) == 'humss')
                        <p class="text-4xl font-black text-gray-900 text-sky-400">Humanities and Social Sciences (HUMSS) - YEAR LEVEL</p>
                        <hr>
                        <br>
                        <p class="text-4xl font-black text-gray-900 dark:text-black">
                            <a href="viewsection?sem=first&Request=humss-1a&year={{ date('Y') }}"
                                class="hover:text-yellow-400 hover:text-6xl transition duration-300 ease-in-out">
                                HUMSS-1A</a>
                        </p>
                          <p class="text-gray-600 dark:text-gray-400">This class is for first-year HUMSS students.</p>
                        <hr>
                        <br>
                        <p class="text-4xl font-black text-gray-900 dark:text-black">
                            <a href="viewsection?sem=first&Request=humss-1b&year={{ date('Y') }}"
                                class="hover:text-yellow-400 hover:text-6xl transition duration-300 ease-in-out">
                                HUMSS-1B</a>
                        </p>
                          <p class="text-gray-600 dark:text-gray-400">This class is for first-year HUMSS students.</p>
                        <hr>
                        <br>
                        <p class="text-4xl font-black text-gray-900 dark:text-black">
                            <a href="viewsection?sem=first&Request=humss-2a&year={{ date('Y') }}"
                                class="hover:text-yellow-400 hover:text-6xl transition duration-300 ease-in-out">HUMSS-2A</a>
                        </p>
                          <p class="text-gray-600 dark:text-gray-400">This class is for second-year HUMSS students.</p>
                        <hr>
                        <br>
                        <p class="text-4xl font-black text-gray-900 dark:text-black"> <a
                                href="viewsection?sem=first&Request=humss-2b&year={{ date('Y') }}"
                                class="hover:text-yellow-400 hover:text-6xl transition duration-300 ease-in-out">
                                HUMSS-2B</a></p>
                          <p class="text-gray-600 dark:text-gray-400">This class is for second-year HUMSS students.</p>
                        <hr>
                        <br>
                        @elseif(request()->segment(1) == 'ga')
                        <p class="text-4xl font-black text-gray-900 text-sky-400">General Academic (GA) - YEAR LEVEL</p>
                        <hr>
                        <br>
                        <p class="text-4xl font-black text-gray-900 dark:text-black">
                            <a href="viewsection?sem=first&Request=ga-1a&year={{ date('Y') }}"
                                class="hover:text-yellow-400 hover:text-6xl transition duration-300 ease-in-out">
                                GA-1A</a>
                        </p>
                          <p class="text-gray-600 dark:text-gray-400">This class is for first-year GA students.</p>
                        <hr>
                        <br>
                        <p class="text-4xl font-black text-gray-900 dark:text-black">
                            <a href="viewsection?sem=first&Request=ga-1b&year={{ date('Y') }}"
                                class="hover:text-yellow-400 hover:text-6xl transition duration-300 ease-in-out">
                                GA-1B</a>
                        </p>
                          <p class="text-gray-600 dark:text-gray-400">This class is for first-year GA students.</p>
                        <hr>
                        <br>
                        <p class="text-4xl font-black text-gray-900 dark:text-black">
                            <a href="viewsection?sem=first&Request=ga-2a&year={{ date('Y') }}"
                                class="hover:text-yellow-400 hover:text-6xl transition duration-300 ease-in-out">GA-2A</a>
                        </p>
                          <p class="text-gray-600 dark:text-gray-400">This class is for second-year GA students.</p>
                        <hr>
                        <br>
                        <p class="text-4xl font-black text-gray-900 dark:text-black"> <a
                                href="viewsection?sem=first&Request=ga-2b&year={{ date('Y') }}"
                                class="hover:text-yellow-400 hover:text-6xl transition duration-300 ease-in-out">
                                GA-2B</a></p>
                          <p class="text-gray-600 dark:text-gray-400">This class is for second-year GA students.</p>
                        <hr>
                        <br>
                        @elseif(request()->segment(1) == 'it')
                        <p class="text-4xl font-black text-gray-900 text-sky-400">IT in Mobile App and Web Development (IT) - YEAR LEVEL</p>
                        <hr>
                        <br>
                        <p class="text-4xl font-black text-gray-900 dark:text-black">
                            <a href="viewsection?sem=first&Request=it-1a&year={{ date('Y') }}"
                                class="hover:text-yellow-400 hover:text-6xl transition duration-300 ease-in-out">
                                IT-1A</a>
                        </p>
                          <p class="text-gray-600 dark:text-gray-400">This class is for first-year IT students.</p>
                        <hr>
                        <br>
                        <p class="text-4xl font-black text-gray-900 dark:text-black">
                            <a href="viewsection?sem=first&Request=it-2a&year={{ date('Y') }}"
                                class="hover:text-yellow-400 hover:text-6xl transition duration-300 ease-in-out">
                                IT-2A</a>
                        </p>
                          <p class="text-gray-600 dark:text-gray-400">This class is for second-year IT students.</p>
                        <hr>
                        <br>
                        <p class="text-4xl font-black text-gray-900 dark:text-black">
                            <a href="viewsection?sem=first&Request=it-3a&year={{ date('Y') }}"
                                class="hover:text-yellow-400 hover:text-6xl transition duration-300 ease-in-out">IT-3A</a>
                        </p>
                          <p class="text-gray-600 dark:text-gray-400">This class is for third-year IT students.</p>
                        <hr>
                        <br>
                        <p class="text-4xl font-black text-gray-900 dark:text-black"> <a
                                href="viewsection?sem=first&Request=it-4a&year={{ date('Y') }}"
                                class="hover:text-yellow-400 hover:text-6xl transition duration-300 ease-in-out">
                                IT-4A</a></p>
                          <p class="text-gray-600 dark:text-gray-400">This class is for fourth-year IT students.</p>
                        <hr>
                        <br>
                        @elseif(request()->segment(1) == 'to')
                        <p class="text-4xl font-black text-gray-900 text-sky-400">Tourism Operations (TO) - YEAR LEVEL</p>
                        <hr>
                        <br>
                        <p class="text-4xl font-black text-gray-900 dark:text-black">
                            <a href="viewsection?sem=first&Request=to-1a&year={{ date('Y') }}"
                                class="hover:text-yellow-400 hover:text-6xl transition duration-300 ease-in-out">
                                TO-1A</a>
                        </p>
                          <p class="text-gray-600 dark:text-gray-400">This class is for first-year TO students.</p>
                        <hr>
                        <br>
                        <p class="text-4xl font-black text-gray-900 dark:text-black">
                            <a href="viewsection?sem=first&Request=to-2a&year={{ date('Y') }}"
                                class="hover:text-yellow-400 hover:text-6xl transition duration-300 ease-in-out">
                                TO-2A</a>
                        </p>
                          <p class="text-gray-600 dark:text-gray-400">This class is for second-year TO students.</p>
                        <hr>
                        <br>
                        <p class="text-4xl font-black text-gray-900 dark:text-black">
                            <a href="viewsection?sem=first&Request=to-3a&year={{ date('Y') }}"
                                class="hover:text-yellow-400 hover:text-6xl transition duration-300 ease-in-out">TO-3A</a>
                        </p>
                          <p class="text-gray-600 dark:text-gray-400">This class is for third-year TO students.</p>
                        <hr>
                        <br>
                        <p class="text-4xl font-black text-gray-900 dark:text-black"> <a
                                href="viewsection?sem=first&Request=to-4a&year={{ date('Y') }}"
                                class="hover:text-yellow-400 hover:text-6xl transition duration-300 ease-in-out">
                                TO-4A</a></p>
                          <p class="text-gray-600 dark:text-gray-400">This class is for fourth-year TO students.</p>
                        <hr>
                        <br>
                        @elseif(request()->segment(1) == 'ca')
                        <p class="text-4xl font-black text-gray-900 text-sky-400">Culinary Arts (CA) - YEAR LEVEL</p>
                        <hr>
                        <br>
                        <p class="text-4xl font-black text-gray-900 dark:text-black">
                            <a href="viewsection?sem=first&Request=ca-1a&year={{ date('Y') }}"
                                class="hover:text-yellow-400 hover:text-6xl transition duration-300 ease-in-out">
                                CA-1A</a>
                        </p>
                          <p class="text-gray-600 dark:text-gray-400">This class is for first-year CA students.</p>
                        <hr>
                        <br>
                        <p class="text-4xl font-black text-gray-900 dark:text-black">
                            <a href="viewsection?sem=first&Request=ca-2a&year={{ date('Y') }}"
                                class="hover:text-yellow-400 hover:text-6xl transition duration-300 ease-in-out">
                                CA-2A</a>
                        </p>
                          <p class="text-gray-600 dark:text-gray-400">This class is for second-year CA students.</p>
                        <hr>
                        <br>
                        <p class="text-4xl font-black text-gray-900 dark:text-black">
                            <a href="viewsection?sem=first&Request=ca-3a&year={{ date('Y') }}"
                                class="hover:text-yellow-400 hover:text-6xl transition duration-300 ease-in-out">CA-3A</a>
                        </p>
                          <p class="text-gray-600 dark:text-gray-400">This class is for third-year CA students.</p>
                        <hr>
                        <br>
                        <p class="text-4xl font-black text-gray-900 dark:text-black"> <a
                                href="viewsection?sem=first&Request=ca-4a&year={{ date('Y') }}"
                                class="hover:text-yellow-400 hover:text-6xl transition duration-300 ease-in-out">
                                CA-4A</a></p>
                          <p class="text-gray-600 dark:text-gray-400">This class is for fourth-year CA students.</p>
                        <hr>
                        <br>
                    @endif

                </div>
            </div>
        </div>
</x-app-layout>
