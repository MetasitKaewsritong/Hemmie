@extends('layout')
@section('title', 'ระบบลงทะเบียน')
@section('content')
    @foreach($department as $dept)
    @endforeach
    <form action=" {{ route('department.update',$dept->dept_code); }} " method="POST">
        @csrf
        @method('PUT')

        <table class="table-bordered">
            <tr>
                <td>
                    <strong>รหัสสาขา</strong>
                </td>

                <td>
                    <input type="text" readonly name="dept_code"  value="{{ $dept->dept_code }}" class="form-control"
                        placeholder="รหัสสาขา">
                </td>
            </tr>
            <tr>
                <td>
                    <strong>ชื่อสาขา</strong>
                </td>
                <td>
                    <input type="text" name="dept_name" value="{{ $dept->dept_name }}"  class="form-control" placeholder="ชื่อสาขา">
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
