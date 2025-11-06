@extends('layout')
@section('title', 'Music')
@section('content')

    <form action="{{ route('students.store') }}" method="POST">
        @csrf
        @method('POST')

        <table class="table-bordered">
            <tr>
                <td>
                    <strong>รหัสนักเรียน</strong>
                </td>
                <td>
                    <input type="text" name="student_id" class="form-control">
                </td>
            </tr>
            <tr>
                <td>
                    <strong>ชื่อจริง</strong>
                </td>
                <td>
                    <input type="text" name="first_name" class="form-control">
                </td>
            </tr>
            <tr>
                <td>
                    <strong>นามสกุล</strong>
                </td>
                <td>
                    <input type="text" name="last_name" class="form-control">
                </td>
            </tr>
            <tr>
                <td>
                    <strong>วัน/เดือน/ปีเกิด</strong>
                </td>
                <td>
                    <input type="text" name="date_of_birth" class="form-control">
                </td>
            </tr>
            <tr>
                <td>
                    <strong>อีเมลล์</strong>
                </td>
                <td>
                    <input type="text" name="email" class="form-control">
                </td>
            </tr>
            <tr>
                <td>
                    <strong>เบอร์โทรศัพท์</strong>
                </td>
                <td>
                    <input type="text" name="phone" class="form-control">
                </td>
            </tr>
            <tr>
                <td>
                    <strong>วันที่ลงทะเบียน</strong>
                </td>
                <td>
                    <input type="text" name="registration_date" class="form-control">
                </td>
            </tr>

            <tr>
                <td>
                    <div class="card-footer ml-auto mr-auto" align=center>
                        <a href="{{ route('students.index') }}" class="btn btn-danger">ยกเลิก</a>
                        <button type="submit" class="btn btn-primary">บันทึก</button>
                    </div>
                </td>
            </tr>
        </table>
    </form>

@endsection
