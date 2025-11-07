@extends('layout')
@section('title', 'Music - Lessons')
@section('content')

    <div>
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a href="{{ route('lessons.create') }}" class="btn btn-success">เพิ่มข้อมูล</a>
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
                        <a href="{{ route('lessons.edit',$lessons->lesson_id) }}"><button class="btn btn-warning">แก้ไข</button></a>
                        <form action="{{ route('lessons.destroy',$lessons->lesson_id) }}" method="POST">
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
