@extends('layout')
@section('title', 'Music')
@section('content')

@foreach ($courses as $courses)
@endforeach
    <form action="{{ route('courses.update',$courses->course_id) }}" method="POST">
        @csrf
        @method('PUT')

        <table class="table-bordered">
            <tr>
                <td>
                    <strong>รหัสวิชา</strong>
                </td>
                <td>
                    <input type="text" readonly name="course_id" value="{{ $courses->course_id }}" class="form-control">
                </td>
            </tr>
            <tr>
                <td>
                    <strong>ชื่อวิชา</strong>
                </td>
                <td>
                    <input type="text" name="course_name" value="{{ $courses->course_name }}" class="form-control">
                </td>
            </tr>
            <tr>
                <td>
                    <strong>รหัสเครื่องดนตรี</strong>
                </td>
                <td>
                    <input type="text" name="instrument_id" value="{{ $courses->instrument_id }}" class="form-control">
                </td>
            </tr>
            <tr>
                <td>
                    <strong>ระดับ</strong>
                </td>
                <td>
                    <input type="text" name="level" value="{{ $courses->level }}" class="form-control">
                </td>
            </tr>
            <tr>
                <td>
                    <strong>จำนวนสัปดาห์</strong>
                </td>
                <td>
                    <input type="text" name="duration_weeks" value="{{ $courses->duration_weeks }}" class="form-control">
                </td>
            </tr>
            <tr>
                <td>
                    <strong>ราคา</strong>
                </td>
                <td>
                    <input type="text" name="price" value="{{ $courses->price }}" class="form-control">
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
