@extends('layout')
@section('title', 'Music')
@section('content')

@foreach ($enrollments as $enrollments)
@endforeach
    <form action="{{ route('enrollments.update',$enrollments->enrollment_id) }}" method="POST">
        @csrf
        @method('PUT')

        <table class="table-bordered">
            <tr>
                <td>
                    <strong>รหัสการลงทะเบียน</strong>
                </td>
                <td>
                    <input type="text" readonly name="enrollment_id" value="{{ $enrollments->enrollment_id }}" class="form-control">
                </td>
            </tr>
            <tr>
                <td>
                    <strong>รหัสนักเรียน</strong>
                </td>
                <td>
                    <input type="text" name="student_id" value="{{ $enrollments->student_id }}" class="form-control">
                </td>
            </tr>
            <tr>
                <td>
                    <strong>รหัสวิชา</strong>
                </td>
                <td>
                    <input type="text" name="course_id" value="{{ $enrollments->course_id }}" class="form-control">
                </td>
            </tr>
            <tr>
                <td>
                    <strong>รหัสผู้สอน</strong>
                </td>
                <td>
                    <input type="text" name="instructor_id" value="{{ $enrollments->instructor_id }}" class="form-control">
                </td>
            </tr>
            <tr>
                <td>
                    <strong>วันที่เริ่มเรียน</strong>
                </td>
                <td>
                    <input type="text" name="start_date" value="{{ $enrollments->start_date }}" class="form-control">
                </td>
            </tr>
            <tr>
                <td>
                    <strong>วันที่สิ้นสุดการเรียน</strong>
                </td>
                <td>
                    <input type="text" name="end_date" value="{{ $enrollments->end_date }}" class="form-control">
                </td>
            </tr>
            <tr>
                <td>
                    <strong>สถานะ</strong>
                </td>
                <td>
                    <input type="text" name="status" value="{{ $enrollments->status }}" class="form-control">
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
