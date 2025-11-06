@extends('layout')
@section('title', 'Music')
@section('content')

@foreach ($students as $students)
@endforeach
    <form action="{{ route('students.update',$students->student_id) }}" method="POST">
        @csrf
        @method('PUT')

        <table class="table-bordered">
            <tr>
                <td>
                    <strong>รหัสนักเรียน</strong>
                </td>
                <td>
                    <input type="text" readonly name="student_id" value="{{ $students->student_id }}" class="form-control">
                </td>
            </tr>
            <tr>
                <td>
                    <strong>ชื่อจริง</strong>
                </td>
                <td>
                    <input type="text" name="first_name" value="{{ $students->first_name }}" class="form-control">
                </td>
            </tr>
            <tr>
                <td>
                    <strong>นามสกุล</strong>
                </td>
                <td>
                    <input type="text" name="last_name" value="{{ $students->last_name }}" class="form-control">
                </td>
            </tr>
            <tr>
                <td>
                    <strong>วัน/เดือน/ปีเกิด</strong>
                </td>
                <td>
                    <input type="text" name="date_of_birth" value="{{ $students->date_of_birth }}" class="form-control">
                </td>
            </tr>
            <tr>
                <td>
                    <strong>อีเมลล์</strong>
                </td>
                <td>
                    <input type="text" name="email" value="{{ $students->email }}" class="form-control">
                </td>
            </tr>
            <tr>
                <td>
                    <strong>เบอร์โทรศัพท์</strong>
                </td>
                <td>
                    <input type="text" name="phone" value="{{ $students->phone }}" class="form-control">
                </td>
            </tr>
            <tr>
                <td>
                    <strong>วันที่ลงทะเบียน</strong>
                </td>
                <td>
                    <input type="text" name="registration_date" value="{{ $students->registration_date }}" class="form-control">
                </td>
            </tr>

            <tr>
                <td>
                    <div class="card-footer ml-auto mr-auto" align=center>
                        <button type="reset" class="btn btn-danger">ยกเลิก</button>
                        <button type="submit" class="btn btn-primary">บันทึก</button>
                    </div>
                </td>
            </tr>
        </table>
    </form>

@endsection
