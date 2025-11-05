@extends('layout')
@section('title', 'Music')
@section('content')

    <div>
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <button class="btn btn-success"><a href="{{ route('payments.create') }}">เพิ่มข้อมูล</a></button>
            </li>
        </ul>
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
                        <button class="btn btn-warning" >แก้ไข</button>

                        <button type="submit" class="btn btn-danger">ลบ</button>
                        </td>
                    </tr>
                @endforeach                
            </tbody>
        </table>
    </div>
@endsection
