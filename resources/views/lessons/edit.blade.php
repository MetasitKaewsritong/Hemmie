@extends('layout')
@section('title', 'Music')
@section('content')

@foreach ($lessons as $lessons)
@endforeach
    <form action="{{ route('lessons.update',$lessons->lesson_id) }}" method="POST">
        @csrf
        @method('PUT')

        <table class="table-bordered">
            <tr>
                <td>
                    <strong>รหัสวิชา</strong>
                </td>
                <td>
                    <input type="text" readonly name="lesson_id" value="{{ $lessons->lesson_id }}" class="form-control">
                </td>
            </tr>
            <tr>
                <td>
                    <strong>รหัสการลงทะเบียน</strong>
                </td>
                <td>
                    <input type="text" name="enrollment_id" value="{{ $lessons->enrollment_id }}" class="form-control">
                </td>
            </tr>
            <tr>
                <td>
                    <strong>วันที่ลงทะเบียน</strong>
                </td>
                <td>
                    <input type="text" name="lesson_date" value="{{ $lessons->lesson_date }}" class="form-control">
                </td>
            </tr>
            <tr>
                <td>
                    <strong>เวลาเริ่ม</strong>
                </td>
                <td>
                    <input type="text" name="start_time" value="{{ $lessons->start_time }}" class="form-control">
                </td>
            </tr>
            <tr>
                <td>
                    <strong>เวลาสิ้นสุด</strong>
                </td>
                <td>
                    <input type="text" name="end_time" value="{{ $lessons->end_time }}" class="form-control">
                </td>
            </tr>
            <tr>
                <td>
                    <strong>การมาเรียน</strong>
                </td>
                <td>
                    <input type="text" name="attendance" value="{{ $lessons->attendance }}" class="form-control">
                </td>
            </tr>
            <tr>
                <td>
                    <strong>คำอธิบาย</strong>
                </td>
                <td>
                    <input type="text" name="notes" value="{{ $lessons->notes }}" class="form-control">
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
