@extends('layout')
@section('title', 'ระบบลงทะเบียน')
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
                    <th>หน่วยกิต</th>
                    <th colspan=2>ดำเนินการ</th>
                </tr>
            </thead>
            <tbody>
                    @foreach($courses as $courses)
                    <tr>
                        <td>{{ $courses->courses_code }}</td>
                        <td>{{ $courses->courses_name }}</td>
                        <td>{{ $courses->credit }}</td>
                        <td>
                        <a href="{{ route('courses.edit',$courses->courses_code) }}"><button class="btn btn-warning" >แก้ไข</button>

                        <form action="{{ route('courses.destroy',$courses->courses_code) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">ลบ</button>
                        </form>
    
                    </tr>
                    @endforeach             
            </tbody>
        </table>
    </div>
@endsection
