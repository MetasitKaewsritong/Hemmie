@extends('layout')
@section('title', 'ระบบลงทะเบียน')
@section('content')
    <form action="{{ route('courses.store'); }}" method="POST">
        @csrf
        @method('POST')

        <table class="table-bordered">
            <tr>
                <td>
                    <strong>รหัสวิชา</strong>
                </td>

                <td>
                    <input type="text" name="courses_code"  class="form-control"placeholder="รหัสวิชา">
                </td>
            </tr>
            <tr>
                <td>
                    <strong>ชื่อวิชา</strong>
                </td>
                <td>
                    <input type="text" name="courses_name" class="form-control" placeholder="ชื่อวิชา">
                </td>
            </tr>
            <tr>
                <td>
                    <strong>หน่วยกิต</strong>
                </td>
                <td>
                    <input type="text" name="credit" class="form-control" placeholder="หน่วยกิต">
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
