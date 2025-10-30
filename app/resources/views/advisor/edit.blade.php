@extends('layout')
@section('title', 'ระบบลงทะเบียน')
@section('content')
  @foreach($advisor as $ad)
@endforeach
    <form action="{{ route('advisor.update',$ad->advisor_code); }}" method="POST">
        @csrf
        @method('PUT')


        <table class="table-bordered">
            <tr>
                <td>
                    <strong>รหัสอาจารย์</strong>
                </td>


                <td>
                    <input type="text" readonly name="advisor_code" value="{{ $ad->advisor_code }}" class="form-control"
                        placeholder="รหัสอาจารย์">
                </td>
            </tr>
            <tr>
                <td>
                    <strong>ชื่ออาจารย์</strong>
                </td>
                <td>
                    <input type="text" name="advisor_name" value="{{ $ad->advisor_name }}" class="form-control" placeholder="ชื่ออาจารย์">
                </td>
            </tr>
            <tr>
                <td>
                    <strong>เบอร์โทรศัพท์</strong>
                </td>
                <td>
                    <input type="text" name="office_tel" value="{{ $ad->office_tel }}" class="form-control" placeholder="เบอร์โทรศัพท์">
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
                    <div class="card-footer ml-auto mr-auto" align=center>
                        <button type="reset" class="btn btn-danger">ยกเลิก</button>
                        <button type="submit" class="btn btn-primary">บันทึก</button>
                    </div>
                </td>
            </tr>
        </table>
    </form>


@endsection



