<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ 'REMARKS HISTORY FOR ' . strtoupper(auth()->user()->department) . ' DEPARTMENT' }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="overflow-x-auto">
                <div class="flex space-x-4">
                    <form method="get" class="flex space-x-4">
                        <input type="number" name="year" value="{{ request('year') }}" placeholder="Year"
                            class="rounded" />
                        <select name="class" class="rounded">
                            <option value="">Select Class</option>
                            <option value="bsit" {{ request('class') == 'bsit' ? 'selected' : '' }}>BSIT</option>
                            <option value="bshm" {{ request('class') == 'bshm' ? 'selected' : '' }}>BSHM</option>
                            <option value="bstm" {{ request('class') == 'bstm' ? 'selected' : '' }}>BSTM</option>
                            <option value="bsais" {{ request('class') == 'bsais' ? 'selected' : '' }}>BSAIS</option>
                            <option value="bsba" {{ request('class') == 'bsba' ? 'selected' : '' }}>BSBA</option>
                            <option value="act" {{ request('class') == 'act' ? 'selected' : '' }}>ACT</option>
                        </select>

                        <select name="section" class="rounded">
                            <option value="">Select Section</option>
                            <option value="1a" {{ request('section') == '1a' ? 'selected' : '' }}>1a</option>
                            <option value="2a" {{ request('section') == '2a' ? 'selected' : '' }}>2a</option>
                            <option value="3a" {{ request('section') == '3a' ? 'selected' : '' }}>3a</option>
                            <option value="4a" {{ request('section') == '4a' ? 'selected' : '' }}>4a</option>
                        </select>

                        <x-primary-button type="submit">
                            {{ __('FILTER') }}
                        </x-primary-button>
                    </form>

                    <div class="ml-4">
                        <div class="input-group">
                            <input type="search" class="form-control rounded myInput" placeholder="Search"
                                aria-label="Search" aria-describedby="search-addon" />
                        </div>
                    </div>
                </div>
                <br>
                <div class="border border-black">
                    <table class="min-w-full text-left text-sm font-light myTable" id="student-table">
                        <thead>
                            <tr class="whitespace-nowrap px-6 py-4 font-medium border-b border-black">
                                <th scope="col" class="px-6 py-4 border-r border-black">Student Number</th>
                                <th scope="col" class="px-6 py-4 border-r border-black">First Name</th>
                                <th scope="col" class="px-6 py-4 border-r border-black">Middle Name</th>
                                <th scope="col" class="px-6 py-4 border-r border-black">Last Name</th>
                                <th scope="col" class="px-6 py-4 border-r border-black">School Year</th>
                                <th scope="col" class="px-6 py-4 border-r border-black">Class</th>
                                <th scope="col" class="px-6 py-4 border-r border-black">Semester</th>
                                <th scope="col" class="px-6 py-4 ">Remarks</th>
                            </tr>
                        </thead>
                        <tbody>
                            @if ($remarks->count() > 0)
                                @foreach ($remarks as $item)
                                    <tr class="tr">
                                        <td class="px-6 py-4 border-b border-black border-r border-black">
                                            {{ $item->student_number }}</td>
                                        <td class="px-6 py-4 border-b border-black border-r border-black">
                                            {{ $item->first_name }}</td>
                                        <td class="px-6 py-4 border-b border-black border-r border-black">
                                            {{ $item->middle_name }}</td>
                                        <td class="px-6 py-4 border-b border-black border-r border-black">
                                            {{ $item->last_name }}</td>
                                        <td class="px-6 py-4 border-b border-black border-r border-black">
                                            {{ $item->school_year }}</td>
                                        <td class="px-6 py-4 border-b border-black border-r border-black">
                                            {{ $item->class }}</td>
                                        <td class="px-6 py-4 border-b border-black border-r border-black">
                                            {{ $item->semester }}</td>
                                        <td class="px-6 py-4 border-b border-black">{{ $item->remarks }}</td>
                                    </tr>
                                @endforeach
                            @else
                            <tr>
                                <td class="text-center" colspan="8"><strong>No student found</strong></td>
                            </tr>
                            @endif
                        </tbody>
                    </table>
                </div>
                <br>
                {{ $remarks->links() }}
            </div>
        </div>
    </div>
</x-app-layout>
