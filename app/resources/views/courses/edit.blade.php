@extends('layout')
@section('title', 'ระบบลงทะเบียน')
@section('content')
    @foreach($courses as $cs)
    @endforeach
    <form action="{{ route('courses.update',$cs->courses_code); }}" method="POST">
        @csrf
        @method('PUT')

        <table class="table-bordered">
            <tr>
                <td>
                    <strong>รหัสวิชา</strong>
                </td>

                <td>
                    <input type="text" readonly name="courses_code" value="{{ $cs->courses_code }}" class="form-control"
                        placeholder="รหัสวิชา">
                </td>
            </tr>
            <tr>
                <td>
                    <strong>ชื่อวิชา</strong>
                </td>
                <td>
                    <input type="text" name="courses_name"  value="{{ $cs->courses_name }}" class="form-control" placeholder="ชื่อวิชา">
                </td>
            </tr>
            <tr>
                <td>
                    <strong>หน่วยกิต</strong>
                </td>
                <td>
                    <input type="text" name="credit"  value="{{ $cs->credit }}" class="form-control" placeholder="หน่วยกิต">
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
