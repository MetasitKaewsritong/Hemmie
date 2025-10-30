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
                    <th>รหัสการลงทะเบียน</th>
                    <th>รหัสนักเรียน</th>
                    <th>รหัสวิชา</th>
                    <th>รหัสผู้สอน</th>
                    <th>วันที่เริ่มเรียน</th>
                    <th>วันที่สิ้นสุดการเรียน</th>
                    <th>สถานะ</th>
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
