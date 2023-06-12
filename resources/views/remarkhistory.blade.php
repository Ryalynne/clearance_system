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
                            <optgroup label="For College"> </optgroup>
                            <option value="bsit" {{ request('class') == 'bsit' ? 'selected' : '' }}>BSIT</option>
                            <option value="bshm" {{ request('class') == 'bshm' ? 'selected' : '' }}>BSHM</option>
                            <option value="bstm" {{ request('class') == 'bstm' ? 'selected' : '' }}>BSTM</option>
                            <option value="bsais" {{ request('class') == 'bsais' ? 'selected' : '' }}>BSAIS</option>
                            <option value="bsba" {{ request('class') == 'bsba' ? 'selected' : '' }}>BSBA</option>
                            <option value="act" {{ request('class') == 'act' ? 'selected' : '' }}>ACT</option>
                            <optgroup label="For Senior"> </optgroup>
                            <option value="ca" {{ request('class') == 'ca' ? 'selected' : '' }}>CA</option>
                            <option value="to" {{ request('class') == 'to' ? 'selected' : '' }}>TO</option>
                            <option value="it" {{ request('class') == 'it' ? 'selected' : '' }}>IT</option>
                            <option value="ga" {{ request('class') == 'ga' ? 'selected' : '' }}>GA</option>
                            <option value="humss" {{ request('class') == 'humss' ? 'selected' : '' }}>HUMSS
                            </option>
                            <option value="stem" {{ request('class') == 'stem' ? 'selected' : '' }}>STEM</option>
                            <option value="abm" {{ request('class') == 'abm' ? 'selected' : '' }}>ABM</option>

                        </select>
                        <select name="section" class="rounded">
                            <option value="">Select Section</option>
                            <option value="1a" {{ request('section') == '1a' ? 'selected' : '' }}>1A</option>
                            <option value="1b" {{ request('section') == '1b' ? 'selected' : '' }}>1B</option>
                            <option value="2a" {{ request('section') == '2a' ? 'selected' : '' }}>2A</option>
                            <option value="2b" {{ request('section') == '2b' ? 'selected' : '' }}>2B</option>
                            <option value="3a" {{ request('section') == '3a' ? 'selected' : '' }}>3A</option>
                            <option value="3b" {{ request('section') == '3b' ? 'selected' : '' }}>3B</option>
                            <option value="4a" {{ request('section') == '4a' ? 'selected' : '' }}>4A</option>
                            <option value="4b" {{ request('section') == '4b' ? 'selected' : '' }}>4B</option>
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
                                <th scope="col" class="px-6 py-4 border-r border-black">Date Cleared</th>
                                <th scope="col" class="px-6 py-4 ">Remarks</th>
                            </tr>
                        </thead>
                        <tbody>
                            @if ($remarks->count() > 0)
                                @foreach ($remarks as $item)
                                    <tr class="tr">
                                        <td class="px-6 py-4 border-b border-black border-r border-black">
                                            {{ $item->student_number }} </td>
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
                                        <td class="px-6 py-4 border-b border-black border-r border-black">
                                            {{ \Carbon\Carbon::parse($item->updated_at)->format('Y-m-d') }}</td>
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
