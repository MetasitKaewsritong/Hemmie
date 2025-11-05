@extends('layout')
@section('title', 'Music')
@section('content')

    <form action=" " method="POST">
        @csrf
        @method('POST')

        <table class="table-bordered">
            <tr>
                <td>
                    <strong>รหัสนิสิต:</strong>
                </td>

                <td>
                    <input type="text" name="student_code" readonly value="67161111" class="form-control"
                        placeholder="รหัสนิสิต">
                </td>
            </tr>
            <tr>
                <td>
                    <strong>ชื่อ-นามสกุล:</strong>
                </td>
                <td>
                    <input type="text" name="student_name" class="form-control" placeholder="ชื่อ-นามสกุล">
                </td>
            </tr>
            <tr>
                <td>
                    <strong>เกรดเฉลี่ย:</strong>
                </td>
                <td>
                    <input type="text" name="gpa" class="form-control" placeholder="GPA">
                </td>
            </tr>
            <tr>
                <td>
                    <strong>รหัสสาขา</strong>
                </td>
                <td>
                    <input type="text" name="dept_code" class="form-control" placeholder="รหัสสาขา">
                </td>
            </tr>
            <tr>
                <td>
                    <strong>รหัสอาจารย์ :</strong>
                </td>
                <td>
                    <input type="text" name="advisor_code" class="form-control" placeholder="รหัสอาจารย์ที่ปรึกษา">
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
