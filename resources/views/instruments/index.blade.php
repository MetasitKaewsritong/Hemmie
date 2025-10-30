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
                    <th>รหัสเครื่องดนตรี</th>
                    <th>ชื่อเครื่องดนตรี</th>
                    <th>ชนิดเครื่องดนตรี</th>
                    <th>ราคาเช่า</th>
                </tr>
            </thead>
            <tbody>
                    <tr>
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
