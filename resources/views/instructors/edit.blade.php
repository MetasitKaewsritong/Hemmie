@extends('layout')
@section('title', 'Music')
@section('content')

@foreach ($instructors as $instructors)
@endforeach
    <form action="{{ route('instructors.update',$instructors->instructor_id) }}" method="POST">
        @csrf
        @method('PUT')

        <table class="table-bordered">
            <tr>
                <td>
                    <strong>รหัสผู้สอน</strong>
                </td>
                <td>
                    <input type="text" readonly name="instructor_id" value="{{ $instructors->instructor_id }}" class="form-control">
                </td>
            </tr>
            <tr>
                <td>
                    <strong>ชื่อจริง</strong>
                </td>
                <td>
                    <input type="text" name="first_name" value="{{ $instructors->first_name }}" class="form-control">
                </td>
            </tr>
            <tr>
                <td>
                    <strong>นามสกุล</strong>
                </td>
                <td>
                    <input type="text" name="last_name" value="{{ $instructors->last_name }}" class="form-control">
                </td>
            </tr>
            <tr>
                <td>
                    <strong>อีเมลล์</strong>
                </td>
                <td>
                    <input type="text" name="email" value="{{ $instructors->email }}" class="form-control">
                </td>
            </tr>
            <tr>
                <td>
                    <strong>เบอร์โทรศัพท์</strong>
                </td>
                <td>
                    <input type="text" name="phone" value="{{ $instructors->phone }}" class="form-control">
                </td>
            </tr>
            <tr>
                <td>
                    <strong>สายที่ถนัด</strong>
                </td>
                <td>
                    <input type="text" name="specialization" value="{{ $instructors->specialization }}" class="form-control">
                </td>
            </tr>
            <tr>
                <td>
                    <strong>วันที่จ้าง</strong>
                </td>
                <td>
                    <input type="text" name="hire_date" value="{{ $instructors->hire_date }}" class="form-control">
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
