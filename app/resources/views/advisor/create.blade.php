@extends('layout')
@section('title', 'ระบบลงทะเบียน')
@section('content')
    <form action="{{ route('advisor.store'); }}" method="POST">
        @csrf
        @method('POST')

        <table class="table-bordered">
            <tr>
                <td>
                    <strong>รหัสอาจารย์</strong>
                </td>

                <td>
                    <input type="text" name="advisor_code" value="" class="form-control"
                        placeholder="รหัสอาจารย์">
                </td>
            </tr>
            <tr>
                <td>
                    <strong>ชื่อ-นามสกุล</strong>
                </td>
                <td>
                    <input type="text" name="advisor_name" class="form-control" placeholder="ชื่อ-นามสกุล">
                </td>
            </tr>
            <tr>
                <td>
                    <strong>เบอร์โทรศัพท์</strong>
                </td>
                <td>
                    <input type="text" name="office_tel" class="form-control" placeholder="เบอร์โทรศัพท์">
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