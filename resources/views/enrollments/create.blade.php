@extends('layout')
@section('title', 'Music')
@section('content')

    <form action="{{ route('enrollments.store') }}" method="POST">
        @csrf
        @method('POST')

        <table class="table-bordered">
            <tr>
                <td>
                    <strong>รหัสการลงทะเบียน</strong>
                </td>
                <td>
                    <input type="text" name="enrollment_id" class="form-control">
                </td>
            </tr>
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
                    <strong>รหัสวิชา</strong>
                </td>
                <td>
                    <input type="text" name="course_id" class="form-control">
                </td>
            </tr>
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
                    <strong>วันที่เริ่มเรียน</strong>
                </td>
                <td>
                    <input type="text" name="start_date" class="form-control">
                </td>
            </tr>
            <tr>
                <td>
                    <strong>วันที่สิ้นสุดการเรียน</strong>
                </td>
                <td>
                    <input type="text" name="end_date" class="form-control">
                </td>
            </tr>
            <tr>
                <td>
                    <strong>สถานะ</strong>
                </td>
                <td>
                    <input type="text" name="status" class="form-control">
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
