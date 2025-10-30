@extends('layout')
@section('title', 'ระบบลงทะเบียน')
@section('content')
    <form action="{{ route('student.store'); }}" method="POST">
        @csrf
        @method('POST')

        <table class="table-bordered">
            <tr>
                <td>
                    <strong>รหัสนิสิต</strong>
                </td>

                <td>
                    <input type="text" name="student_code" class="form-control"
                        placeholder="รหัสนิสิต">
                </td>
            </tr>
            <tr>
                <td>
                    <strong>ชื่อ-นามสกุล</strong>
                </td>
                <td>
                    <input type="text" name="student_name" class="form-control" placeholder="ชื่อ-นามสกุล">
                </td>
            </tr>
            <tr>
                <td>
                    <strong>เกรดเฉลี่ย</strong>
                </td>
                <td>
                    <input type="text" name="gpa" class="form-control" placeholder="เกรดเฉลี่ย">
                </td>
            </tr>
            <tr>
                <td>
                    <strong>รหัสสาขา</strong>
                </td>
                <td>
                    <select name="dept_code">
                        @foreach ($department as $dept)
                            <option value="{{ $dept->dept_code }}">{{ $dept->dept_code }}&nbsp;&nbsp;{{ $dept->dept_name }}</option>
                        @endforeach
                    </select>
                </td>
            </tr>
            <tr>
                <td>
                    <strong>รหัสอาจารย์</strong>
                </td>
                <td>
                    <select name="advisor_code">
                        @foreach ($advisor as $adv)
                            <option value="{{ $adv->advisor_code }}">{{ $adv->advisor_code }}&nbsp;&nbsp;{{ $adv->advisor_name }}</option>
                        @endforeach
                    </select>
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
