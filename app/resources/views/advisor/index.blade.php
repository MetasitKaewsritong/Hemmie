@extends('layout')
@section('title', 'ระบบลงทะเบียน')
@section('content')

    <div>
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <button class="btn btn-success"><a href="{{ route('advisor.create') }}">เพิ่มข้อมูล</a></button>
            </li>
        </ul>
    </div>
    <div>
        <table class="table">
            <thead class="thead-dark">
                <tr>
                    <th>รหัสอาจารย์</th>
                    <th>ชื่ออาจารย์</th>
                    <th>เบอร์โทรศัพท์</th>
                    <th>สาขา</th>
                    <th colspan=2>ดำเนินการ</th>
                </tr>
            </thead>
            <tbody>
                    @foreach($advisors as $advisor)
                    <tr>
                        <td>{{ $advisor->advisor_code }}</td>
                        <td>{{ $advisor->advisor_name }}</td>
                        <td>{{ $advisor->office_tel }}</td>
                        <td>{{ $advisor->dept_code }}</td>
                        <td>
                        <a href="{{ route('advisor.edit',$advisor->advisor_code) }}"><button class="btn btn-warning" >แก้ไข</button>

                        <form action="{{ route('advisor.destroy',$advisor->advisor_code) }}" method="POST">
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
