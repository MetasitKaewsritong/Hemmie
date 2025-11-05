@extends('layout')
@section('title', 'Music')
@section('content')

    <div>
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <button class="btn btn-success"><a href="{{ route('instruments.create') }}">เพิ่มข้อมูล</a></button>
            </li>
        </ul>
    </div>
    <div>
        <table class="table">
            <thead class="thead-dark">
                <tr>
                    <th>รหัสเครื่องดนตรี</th>
                    <th>ชื่อเครื่องดนตรี</th>
                    <th>ชนิดเครื่องดนตรี</th>
                    <th>ราคาเช่า</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($instruments as $instruments)
                    <tr>
                        <td>{{ $instruments->instrument_id }}</td>
                        <td>{{ $instruments->instrument_name }}</td>
                        <td>{{ $instruments->category }}</td>
                        <td>{{ $instruments->rental_price }}</td>
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
