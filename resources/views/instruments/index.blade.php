@extends('layout')
@section('title', 'Music - Instruments')
@section('content')

    <div>
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a href="{{ route('courses.create') }}" class="btn btn-success">เพิ่มข้อมูล</a>
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
                        <a href="{{ route('instruments.edit',$instruments->instrument_id) }}"><button class="btn btn-warning">แก้ไข</button></a>
                        <form action="{{ route('instruments.destroy',$instruments->instrument_id) }}" method="POST">
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
