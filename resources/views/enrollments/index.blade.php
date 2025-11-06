@extends('layout')
@section('title', 'Music')
@section('content')

    <div>
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <button class="btn btn-success"><a href="{{ route('enrollments.create') }}">เพิ่มข้อมูล</a></button>
            </li>
        </ul>
    </div>
    <div>
        @if (session('Success'))
            <div class="alert alert-success">
                {{ session('Success') }}
            </div>
        @endif
        @if (session('Error'))
            <div class="alert alert-danger">
                {{ session('Error') }}
            </div>
        @endif
    </div>
    <div>
        <table class="table">
            <thead class="thead-dark">
                <tr>
                    <th>รหัสการลงทะเบียน</th>
                    <th>รหัสนักเรียน</th>
                    <th>รหัสวิชา</th>
                    <th>รหัสผู้สอน</th>
                    <th>วันที่เริ่มเรียน</th>
                    <th>วันที่สิ้นสุดการเรียน</th>
                    <th>สถานะ</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($enrollments as $enrollments)
                    <tr>
                        <td>{{ $enrollments->enrollment_id }}</td>
                        <td>{{ $enrollments->student_id }}</td>
                        <td>{{ $enrollments->course_id }}</td>
                        <td>{{ $enrollments->instructor_id }}</td>
                        <td>{{ $enrollments->start_date }}</td>
                        <td>{{ $enrollments->end_date }}</td>
                        <td>{{ $enrollments->status }}</td>
                        <td>
                        <a href="{{ route('enrollments.edit',$enrollments->enrollment_id) }}"><button class="btn btn-warning" >แก้ไข</button>
                        <form action="{{ route('enrollments.destroy',$enrollments->enrollment_id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">ลบ</button>
                        </form>
                        </td>
                    </tr>
                @endforeach                
            </tbody>
        </table>
    </div>
@endsection
