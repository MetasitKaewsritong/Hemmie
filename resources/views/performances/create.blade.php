@extends('layout')
@section('title', 'Music')
@section('content')

    <form action="{{ route('performances.store') }}" method="POST">
        @csrf
        @method('POST')

        <table class="table-bordered">
            <tr>
                <td>
                    <strong>รหัสการแสดง</strong>
                </td>
                <td>
                    <input type="text" name="performance_id" class="form-control">
                </td>
            </tr>
            <tr>
                <td>
                    <strong>ชื่อการแสดง</strong>
                </td>
                <td>
                    <input type="text" name="performance_name" class="form-control">
                </td>
            </tr>
            <tr>
                <td>
                    <strong>วันที่แสดง</strong>
                </td>
                <td>
                    <input type="text" name="performance_date" class="form-control">
                </td>
            </tr>
            <tr>
                <td>
                    <strong>สถานที่ที่แสดง</strong>
                </td>
                <td>
                    <input type="text" name="venue" class="form-control">
                </td>
            </tr>
            <tr>
                <td>
                    <strong>คำอธิบาย</strong>
                </td>
                <td>
                    <input type="text" name="description" class="form-control">
                </td>
            </tr>

            <tr>
                <td>
                    <div class="card-footer ml-auto mr-auto" align=center>
                        <a href="{{ route('performances.index') }}" class="btn btn-danger">ยกเลิก</a>
                        <button type="submit" class="btn btn-primary">บันทึก</button>
                    </div>
                </td>
            </tr>
        </table>
    </form>

@endsection
