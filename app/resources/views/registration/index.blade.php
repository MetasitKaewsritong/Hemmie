@extends('layout')
@section('title', 'ระบบลงทะเบียน')
@section('content')

    <div>
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <button class="btn btn-success"><a href="{{ route('registration.create') }}">เพิ่มข้อมูล</a></button>
            </li>
        </ul>
    </div>
    <div>
        <table class="table">
            <thead class="thead-dark">
                <tr>
                    <th>รหัสนิสิต</th>
                    <th>รหัสวิชา</th>
                    <th>เซค</th>
                    <th>เกรด</th>
                    <th>เทอม</th>
                    <th colspan=2>ดำเนินการ</th>
                </tr>
            </thead>
            <tbody>
                    @foreach($registrations as $registration)
                    <tr>                   
                        <td>{{ $registration->student_code }}</td>
                        <td>{{ $registration->course_code }}</td>
                        <td>{{ $registration->section }}</td>
                         <td>{{ $registration->grade }}</td>
                        <td>{{ $registration->semester }}</td>
                        <td>
                        <a href="{{ route('registration.edit',$registration->student_code) }}"><button class="btn btn-warning" >แก้ไข</button>

                        <form action="{{ route('registration.destroy',$registration->student_code) }}" method="POST">
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
