@extends('layout')
@section('title', 'Music')
@section('content')

    <div>
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <button class="btn btn-success"><a href="{{ route('lessons.create') }}">เพิ่มข้อมูล</a></button>
            </li>
        </ul>
    </div>
    <div>
        <table class="table">
            <thead class="thead-dark">
                <tr>
                    <th>รหัสวิชา</th>
                    <th>รหัสการลงทะเบียน</th>
                    <th>วันที่ลงทะเบียน</th>
                    <th>เวลาเริ่ม</th>
                    <th>เวลาสิ้นสุด</th>
                    <th>การมาเรียน</th>
                    <th>คำอธิบาย</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($lessons as $lessons)
                    <tr>
                        <td>{{ $lessons->lesson_id }}</td>
                        <td>{{ $lessons->enrollment_id }}</td>
                        <td>{{ $lessons->lesson_date }}</td>
                        <td>{{ $lessons->start_time }}</td>
                        <td>{{ $lessons->end_time }}</td>
                        <td>{{ $lessons->attendance }}</td>
                        <td>{{ $lessons->notes }}</td>
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
