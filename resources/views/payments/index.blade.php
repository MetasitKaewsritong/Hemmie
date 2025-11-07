@extends('layout')
@section('title', 'Music - Payments')
@section('content')

    <div>
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a href="{{ route('payments.create') }}" class="btn btn-success">เพิ่มข้อมูล</a>
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
                    <th>รหัสการชำระเงิน</th>
                    <th>รหัสนักเรียน</th>
                    <th>จำนวนเงิน</th>
                    <th>วันที่ชำระเงิน</th>
                    <th>วิธีการชำระเงิน</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($payments as $payments)
                    <tr>
                        <td>{{ $payments->payment_id }}</td>
                        <td>{{ $payments->student_id }}</td>
                        <td>{{ $payments->amount }}</td>
                        <td>{{ $payments->payment_date }}</td>
                        <td>{{ $payments->payment_method }}</td>
                        <td>
                        <a href="{{ route('payments.edit',$payments->payment_id) }}"><button class="btn btn-warning">แก้ไข</button></a>
                        <form action="{{ route('payments.destroy',$payments->payment_id) }}" method="POST">
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
