@extends('layout')
@section('title', 'Music')
@section('content')

    <form action="{{ route('instruments.store') }}" method="POST">
        @csrf
        @method('POST')

        <table class="table-bordered">
            <tr>
                <td>
                    <strong>รหัสเครื่องดนตรี</strong>
                </td>
                <td>
                    <input type="text" name="instrument_id" class="form-control">
                </td>
            </tr>
            <tr>
                <td>
                    <strong>ชื่อเครื่องดนตรี</strong>
                </td>
                <td>
                    <input type="text" name="instrument_name" class="form-control">
                </td>
            </tr>
            <tr>
                <td>
                    <strong>ชนิดเครื่องดนตรี</strong>
                </td>
                <td>
                    <input type="text" name="category" class="form-control">
                </td>
            </tr>
            <tr>
                <td>
                    <strong>ราคาเช่า</strong>
                </td>
                <td>
                    <input type="text" name="rental_price" class="form-control">
                </td>
            </tr>

            <tr>
                <td>
                    <div class="card-footer ml-auto mr-auto" align=center>
                        <a href="{{ route('instruments.index') }}" class="btn btn-danger">ยกเลิก</a>
                        <button type="submit" class="btn btn-primary">บันทึก</button>
                    </div>
                </td>
            </tr>
        </table>
    </form>

@endsection
