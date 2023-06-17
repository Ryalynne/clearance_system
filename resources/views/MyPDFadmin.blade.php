<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <br>
</head>
<center>
    <h3>STUDENTS REQUIRING REMARKS FOR CLEARANCE</h3>
</center>

<div>
    {{-- <span>School Year: {{$year}} </span>    --}}
</div>

<div>
<span>Please ensure that all students in the list are in compliance.</span>
</div>
<br>
<body>
    <table class="table table-bordered myTable">
        <thead>
            <tr class="bg-success text-white">
                <th>Student Number</th>
                <th>First Name</th>
                <th>Middle Name</th>
                <th>Last Name</th>
                <th>School Year</th>
                <th>Class</th>
                <th>Semester</th>
                <th>Remarks</th>
                <th>Department</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($remark as $item)
                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 tr">
                    <td>{{ $item->student_number }}</td>
                    <td>{{ $item->first_name }}</td>
                    <td>{{ $item->middle_name }}</td>
                    <td>{{ $item->last_name }}</td>
                    <td>{{ $item->school_year }}</td>
                    <td>{{ $item->class }}</td>
                    <td>{{ $item->semester }}</td>
                    {{-- <td class="px-4 py-2 border-b border-r">
                        {{ \Carbon\Carbon::parse($item->updated_at)->format('Y-m-d') }}</td> --}}
                    <td>{{ $item->remarks }}</td>
                    <td>{{ $item->department }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>

    {{-- <div style="display: flex; justify-content: space-between; margin-top: 20px;">
        <div>
            <span>Date Printed: </span>
            <span>{{ date('Y-m-d') }}</span>
        </div>
        <br>
        <div>
            <span>Prepared by: </span>
            <span contenteditable="true" style="border-bottom: 1px solid #727272;">{{ auth()->user()->name }}</span>
        </div>
    </div> --}}
</body>

</html>

<style>
     hr {
            display: block;
            width: 20%;
            border-top: 0px solid #000000;
            margin: 1em 0;
            padding: 0;
        }

        .table-container {
            overflow-x: auto;
        }

        table {
            border-collapse: collapse;
            width: 100%;
        }

        th,
        td {
            text-align: left;
            padding: 8px;
            border: 1px solid #727272;
        }

        tr:nth-child(even) {
            background-color: #f2f2f2
        }

        th {
            border: 1px solid #727272;
            background-color: #2776ff;
            color: white;
        }

        h3 {
            color: #000000;
        }

        @media screen and (max-width: 768px) {
            table {
                font-size: 12px;
            }
        }
</style>