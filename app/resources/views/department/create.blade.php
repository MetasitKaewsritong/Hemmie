@extends('layout')
@section('title', 'ระบบลงทะเบียน')
@section('content')
    <form action=" {{ route('department.store'); }} " method="POST">
        @csrf
        @method('POST')

        <table class="table-bordered">
            <tr>
                <td>
                    <strong>รหัสสาขา</strong>
                </td>

                <td>
                    <input type="text" name="dept_code" class="form-control"
                        placeholder="รหัสสาขา">
                </td>
            </tr>
            <tr>
                <td>
                    <strong>ชื่อสาขา</strong>
                </td>
                <td>
                    <input type="text" name="dept_name" class="form-control" placeholder="ชื่อสาขา">
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
