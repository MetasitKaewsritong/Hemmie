@extends('layout')
@section('title', 'Music')
@section('content')

    <div>
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <button class="btn btn-success">เพิ่มข้อมูล</button>
            </li>
        </ul>
    </div>
    <div>
        <table class="table">
            <thead class="thead-dark">
                <tr>
                    <th>รหัสผู้สอน</th>
                    <th>ชื่อจริง</th>
                    <th>นามสกุล</th>
                    <th>อีเมลล์</th>
                    <th>เบอร์โทรศัพท์</th>
                    <th>สายที่ถนัด</th>
                    <th>วันที่จ้าง</th>
                </tr>
            </thead>
            <tbody>
                    <tr>
                        <td>-</td>
                        <td>-</td>
                        <td>-</td>
                        <td>-</td>
                        <td>-</td>
                        <td>-</td>
                        <td>-</td>
                        <td>
                        <button class="btn btn-warning" >แก้ไข</button>

                        <button type="submit" class="btn btn-danger">ลบ</button>
                        </td>
                    </tr>                
            </tbody>
        </table>
    </div>
@endsection
