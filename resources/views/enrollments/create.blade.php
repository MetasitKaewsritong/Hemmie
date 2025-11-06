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
                    <select name="student_id">
                        @foreach ($students as $students)
                            <option value="{{ $students->student_id }}">{{ $students->student_id }}&nbsp;&nbsp;{{ $students->first_name }}&nbsp;&nbsp;{{ $students->last_name }}</option>
                        @endforeach
                    </select>
                </td>
            </tr>
            <tr>
                <td>
                    <strong>รหัสวิชา</strong>
                </td>
                <td>
                    <select name="course_id">
                        @foreach ($courses as $courses)
                            <option value="{{ $courses->course_id }}">{{ $courses->course_id }}&nbsp;&nbsp;{{ $courses->course_name }}</option>
                        @endforeach
                    </select>
                </td>
            </tr>
            <tr>
                <td>
                    <strong>รหัสผู้สอน</strong>
                </td>
                <td>
                    <select name="instructor_id">
                        @foreach ($instructors as $instructors)
                            <option value="{{ $instructors->instructor_id }}">{{ $instructors->instructor_id }}&nbsp;&nbsp;{{ $instructors->first_name }}&nbsp;&nbsp;{{ $instructors->last_name }}</option>
                        @endforeach
                    </select>
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
                        <a href="{{ route('enrollments.index') }}" class="btn btn-danger">ยกเลิก</a>
                        <button type="submit" class="btn btn-primary">บันทึก</button>
                    </div>
                </td>
            </tr>
        </table>
    </form>

@endsection
