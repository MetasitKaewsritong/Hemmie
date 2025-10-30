@extends('layout')
@section('title', 'ระบบลงทะเบียน')
@section('content')

    <div>
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <button class="btn btn-success"><a href="{{ route('student.create') }}">เพิ่มข้อมูล</a></button>
            </li>
        </ul>
    </div>
    <div>
        <table class="table">
            <thead class="thead-dark">
                <tr>
                    <th>รหัสนิสิต</th>
                    <th>ชื่อนิสิต</th>
                    <th>เกรดเฉลี่ย</th>
                    <th>สาขา</th>
                    <th>อาจารย์ที่ปรึกษา</th>
                    <th colspan=2>ดำเนินการ</th>
                </tr>
            </thead>
            <tbody>
                    @foreach($students as $student)
                    <tr>
                        <td>{{ $student->student_code }}</td>
                        <td>{{ $student->student_name }}</td>
                        <td>{{ $student->gpa }}</td>
                        <td>{{ $student->dept_code }}</td>
                        <td>{{ $student->advisor_code }}</td>
                        <td>
                        <a href="{{ route('student.edit',$student->student_code) }}"><button class="btn btn-warning" >แก้ไข</button>
                       
                        <form action="{{ route('student.destroy',$student->student_code) }}" method="POST">
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
