@extends('layout')
@section('title', 'Music')
@section('content')

    <form action="{{ route('payments.store') }}" method="POST">
        @csrf
        @method('POST')

        <table class="table-bordered">
            <tr>
                <td>
                    <strong>รหัสการชำระเงิน</strong>
                </td>
                <td>
                    <input type="text" name="payment_id" class="form-control">
                </td>
            </tr>
            <tr>
                <td>
                    <strong>รหัสนักเรียน</strong>
                </td>
                <td>
                    <select name="student_id">
                        @foreach ($students as $students)
                            <option value="{{ $students->student_id }}">{{ $students->student_id }}&nbsp;&nbsp;{{ $students->first_name }}&nbsp;&nbsp;{{ $students->last_name }}</option>
                        @endforeach
                    </select>
                </td>
            </tr>
            <tr>
                <td>
                    <strong>จำนวนเงิน</strong>
                </td>
                <td>
                    <input type="text" name="amount" class="form-control">
                </td>
            </tr>
            <tr>
                <td>
                    <strong>วันที่ชำระเงิน</strong>
                </td>
                <td>
                    <input type="text" name="payment_date" class="form-control">
                </td>
            </tr>
            <tr>
                <td>
                    <strong>วิธีการชำระเงิน</strong>
                </td>
                <td>
                    <input type="text" name="payment_method" class="form-control">
                </td>
            </tr>

            <tr>
                <td>
                    <div class="card-footer ml-auto mr-auto" align=center>
                        <a href="{{ route('payments.index') }}" class="btn btn-danger">ยกเลิก</a>
                        <button type="submit" class="btn btn-primary">บันทึก</button>
                    </div>
                </td>
            </tr>
        </table>
    </form>

@endsection
