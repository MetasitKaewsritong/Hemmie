@extends('layout')
@section('title', 'Music - Instructors')
@section('content')

    <div>
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <button class="btn btn-success"><a href="{{ route('instructors.create') }}">เพิ่มข้อมูล</a></button>
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
                    <th>รหัสผู้สอน</th>
                    <th>ชื่อจริง</th>
                    <th>นามสกุล</th>
                    <th>อีเมลล์</th>
                    <th>เบอร์โทรศัพท์</th>
                    <th>สายที่ถนัด</th>
                    <th>วันที่จ้าง</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($instructors as $instructors)
                    <tr>
                        <td>{{ $instructors->instructor_id }}</td>
                        <td>{{ $instructors->first_name }}</td>
                        <td>{{ $instructors->last_name }}</td>
                        <td>{{ $instructors->email }}</td>
                        <td>{{ $instructors->phone }}</td>
                        <td>{{ $instructors->specialization }}</td>
                        <td>{{ $instructors->hire_date }}</td>
                        <td>
                        <a href="{{ route('instructors.edit',$instructors->instructor_id) }}"><button class="btn btn-warning">แก้ไข</button></a>
                        <form action="{{ route('instructors.destroy',$instructors->instructor_id) }}" method="POST">
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
