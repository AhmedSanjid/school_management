<h1>Attendance List</h1>
@foreach ($students as $student)
    <p>{{ $student->name }}</p>
    <form method="POST" action="{{ route('teachers.approveAttendance') }}">
        @csrf
        <input type="hidden" name="student_id" value="{{ $student->id }}">
        <button type="submit">Approve Attendance</button>
    </form>
@endforeach