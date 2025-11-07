@extends('layout')
@section('title', 'Music - Students')
@section('content')

    <div>
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a href="{{ route('students.create') }}" class="btn btn-success">เพิ่มข้อมูล</a>
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
                    <th>รหัสนักเรียน</th>
                    <th>ชื่อจริง</th>
                    <th>นามสกุล</th>
                    <th>วัน/เดือน/ปีเกิด</th>
                    <th>อีเมลล์</th>
                    <th>เบอร์โทรศัพท์</th>
                    <th>วันที่ลงทะเบียน</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($students as $students)
                    <tr>
                        <td>{{ $students->student_id }}</td>
                        <td>{{ $students->first_name }}</td>
                        <td>{{ $students->last_name }}</td>
                        <td>{{ $students->date_of_birth }}</td>
                        <td>{{ $students->email }}</td>
                        <td>{{ $students->phone }}</td>
                        <td>{{ $students->registration_date }}</td>
                        <td>
                        <a href="{{ route('students.edit',$students->student_id) }}"><button class="btn btn-warning">แก้ไข</button></a>
                        <form action="{{ route('students.destroy',$students->student_id) }}" method="POST">
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
