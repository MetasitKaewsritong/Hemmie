@extends('layout')
@section('title', 'Music')
@section('content')

    <form action="{{ route('courses.store') }}" method="POST">
        @csrf
        @method('POST')

        <table class="table-bordered">
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
                    <strong>ชื่อวิชา</strong>
                </td>
                <td>
                    <input type="text" name="course_name" class="form-control">
                </td>
            </tr>
            <tr>
                <td>
                    <strong>รหัสเครื่องดนตรี</strong>
                </td>
                <td>
                    <select name="instrument_id">
                        @foreach ($instruments as $instruments)
                            <option value="{{ $instruments->instrument_id }}">{{ $instruments->instrument_id }}&nbsp;&nbsp;{{ $instruments->instrument_name }}</option>
                        @endforeach
                    </select>
                </td>
            </tr>
            <tr>
                <td>
                    <strong>ระดับ</strong>
                </td>
                <td>
                    <input type="text" name="level" class="form-control">
                </td>
            </tr>
            <tr>
                <td>
                    <strong>จำนวนสัปดาห์</strong>
                </td>
                <td>
                    <input type="text" name="duration_weeks" class="form-control">
                </td>
            </tr>
            <tr>
                <td>
                    <strong>ราคา</strong>
                </td>
                <td>
                    <input type="text" name="price" class="form-control">
                </td>
            </tr>

            <tr>
                <td>
                    <div class="card-footer ml-auto mr-auto" align=center>
                        <a href="{{ route('courses.index') }}" class="btn btn-danger">ยกเลิก</a>
                        <button type="submit" class="btn btn-primary">บันทึก</button>
                    </div>
                </td>
            </tr>
        </table>
    </form>

@endsection
