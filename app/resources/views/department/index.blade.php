@extends('layout')
@section('title', 'ระบบลงทะเบียน')
@section('content')

    <div>
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <button class="btn btn-success"><a href="{{ route('department.create') }}">เพิ่มข้อมูล</a></button>
            </li>
        </ul>
    </div>
    <div>
        <table class="table">
            <thead class="thead-dark">
                <tr>
                    <th>รหัสสาขา</th>
                    <th>ชื่อสาขา</th>
                    <th colspan=2>ดำเนินการ</th>
                </tr>
            </thead>
            <tbody>
                    @foreach($departments as $department)
                    <tr>
                        <td>{{ $department->dept_code }}</td>
                        <td>{{ $department->dept_name }}</td>
                        <td>
                        <a href="{{ route('department.edit',$department->dept_code) }}"><button class="btn btn-warning" >แก้ไข</button>

                        <form action="{{ route('department.destroy',$department->dept_code) }}" method="POST">
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
