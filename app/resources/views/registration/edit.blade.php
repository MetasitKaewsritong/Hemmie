@extends('layout')
@section('title', 'ระบบลงทะเบียน')
@section('content')
    @foreach($registration as $reg)
    @endforeach
    <form action=" {{ route('registration.update',$reg->student_code); }} " method="POST">
        @csrf
        @method('PUT')

        <table class="table-bordered">
            <tr>
                <td>
                    <strong>รหัสนิสิต</strong>
                </td>

                <td>
                    <select name="student_code">
                        @foreach ($student as $st)
                            <option value="{{ $st->student_code }}">{{ $st->student_code }}&nbsp;&nbsp;{{ $st->student_name }}</option>
                        @endforeach
                    </select>
                </td>
            </tr>
            <tr>
                <td>
                    <strong>รหัสวิชา</strong>
                </td>
                <td>
                    <select name="courses_code">
                        @foreach ($courses as $cs)
                            <option value="{{ $cs->courses_code }}">{{ $cs->courses_code }}&nbsp;&nbsp;{{ $cs->courses_name }}</option>
                        @endforeach
                    </select>
                </td>
            </tr>
            <tr>
                <td>
                    <strong>เซค</strong>
                </td>
                <td>
                    <input type="text" name="section"  value="{{ $reg->section }}" class="form-control" placeholder="เซค">
                </td>
            </tr>
            <tr>
                <td>
                    <strong>เกรด</strong>
                </td>
                <td>
                    <input type="text" name="grade" value="{{ $reg->grade }}" class="form-control" placeholder="เกรด">
                </td>
            </tr>
            <tr>
                <td>
                    <strong>เทอม</strong>
                </td>
                <td>
                    <input type="text" name="semester" value="{{ $reg->semester }}" class="form-control" placeholder="เทอม">
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