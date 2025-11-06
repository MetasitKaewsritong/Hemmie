@extends('layout')
@section('title', 'Music - Instructors')
@section('content')

    <form action="{{ route('instructors.store') }}" method="POST">
        @csrf
        @method('POST')

        <table class="table-bordered">
            <tr>
                <td>
                    <strong>รหัสผู้สอน</strong>
                </td>
                <td>
                    <input type="text" name="instructor_id" class="form-control">
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
                    <strong>สายที่ถนัด</strong>
                </td>
                <td>
                    <input type="text" name="specialization" class="form-control">
                </td>
            </tr>
            <tr>
                <td>
                    <strong>วันที่จ้าง</strong>
                </td>
                <td>
                    <input type="text" name="hire_date" class="form-control">
                </td>
            </tr>

            <tr>
                <td>
                    <div class="card-footer ml-auto mr-auto" align=center>
                        <a href="{{ route('instructors.index') }}" class="btn btn-danger">ยกเลิก</a>
                        <button type="submit" class="btn btn-primary">บันทึก</button>
                    </div>
                </td>
            </tr>
        </table>
    </form>

@endsection
