@extends('layout')
@section('title', 'Music')
@section('content')

    <div>
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <button class="btn btn-success"><a href="{{ route('courses.create') }}">เพิ่มข้อมูล</a></button>
            </li>
        </ul>
    </div>
    <div>
        <table class="table">
            <thead class="thead-dark">
                <tr>
                    <th>รหัสวิชา</th>
                    <th>ชื่อวิชา</th>
                    <th>รหัสเครื่องดนตรี</th>
                    <th>ระดับ</th>
                    <th>จำนวนสัปดาห์</th>
                    <th>ราคา</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($courses as $courses)
                    <tr>
                        <td>{{ $courses->course_id }}</td>
                        <td>{{ $courses->course_name }}</td>
                        <td>{{ $courses->instrument_id }}</td>
                        <td>{{ $courses->level }}</td>
                        <td>{{ $courses->duration_weeks }}</td>
                        <td>{{ $courses->price }}</td>
                        <td>
                        <button class="btn btn-warning" >แก้ไข</button>

                        <button type="submit" class="btn btn-danger">ลบ</button>
                        </td>
                    </tr>
                @endforeach                
            </tbody>
        </table>
    </div>
@endsection
