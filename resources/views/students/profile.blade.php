<h1>Welcome, {{ $student->name }}</h1>
<img src="{{ $student->photo }}" alt="Profile Photo">
<!-- Button to request attendance -->
<form method="POST" action="{{ route('students.requestAttendance') }}">
    @csrf
    <button type="submit">Request Attendance</button>
</form>