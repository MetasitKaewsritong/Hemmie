@extends('layout')
@section('title', 'Music - Performances')
@section('content')

@foreach ($performances as $performances)
@endforeach
    <form action="{{ route('performances.update',$performances->performance_id) }}" method="POST">
        @csrf
        @method('PUT')

        <table class="table-bordered">
            <tr>
                <td>
                    <strong>รหัสการแสดง</strong>
                </td>
                <td>
                    <input type="text" readonly name="performance_id" value="{{ $performances->performance_id }}" class="form-control">
                </td>
            </tr>
            <tr>
                <td>
                    <strong>ชื่อการแสดง</strong>
                </td>
                <td>
                    <input type="text" name="performance_name" value="{{ $performances->performance_name }}" class="form-control">
                </td>
            </tr>
            <tr>
                <td>
                    <strong>วันที่แสดง</strong>
                </td>
                <td>
                    <input type="text" name="performance_date" value="{{ $performances->performance_date }}" class="form-control">
                </td>
            </tr>
            <tr>
                <td>
                    <strong>สถานที่ที่แสดง</strong>
                </td>
                <td>
                    <input type="text" name="venue" value="{{ $performances->venue }}" class="form-control">
                </td>
            </tr>
            <tr>
                <td>
                    <strong>คำอธิบาย</strong>
                </td>
                <td>
                    <input type="text" name="description" value="{{ $performances->description }}" class="form-control">
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
