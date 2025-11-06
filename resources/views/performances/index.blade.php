@extends('layout')
@section('title', 'Music')
@section('content')

    <div>
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <button class="btn btn-success"><a href="{{ route('performances.create') }}">เพิ่มข้อมูล</a></button>
            </li>
        </ul>
    </div>
    <div>
        <table class="table">
            <thead class="thead-dark">
                <tr>
                    <th>รหัสการแสดง</th>
                    <th>ชื่อการแสดง</th>
                    <th>วันที่แสดง</th>
                    <th>สถานที่ที่แสดง</th>
                    <th>คำอธิบาย</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($performances as $performances)
                    <tr>
                        <td>{{ $performances->performance_id }}</td>
                        <td>{{ $performances->performance_name }}</td>
                        <td>{{ $performances->performance_date }}</td>
                        <td>{{ $performances->venue }}</td>
                        <td>{{ $performances->description }}</td>
                        <td>
                        <a href="{{ route('performances.edit',$performances->performance_id) }}"><button class="btn btn-warning">แก้ไข</button></a>
                        <form action="{{ route('performances.destroy',$performances->performance_id) }}" method="POST">
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
