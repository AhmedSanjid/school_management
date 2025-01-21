<h1>Student List</h1>
@foreach ($students as $student)
    <p>{{ $student->name }} - {{ $student->roll_number }}</p>
@endforeach

<h1>Teacher List</h1>
@foreach ($teachers as $teacher)
    <p>{{ $teacher->name }} - {{ $teacher->email }}</p>
@endforeach