@extends('adminLayouts.layout')

@section('content')
<div>
    <h2>Thêm Nhân viên</h2>
</div>
<form method="post" action="{{ route('employee.store') }}">
    @csrf
    <table>
        <tr>
            <td><label for="name">Name:</label></td>
            <td><input class="form-control m-3 " type="text" id="name" name="Name"></td>
        </tr>
        <tr>
            <td><label for="gender">Gender:</label></td>
            <td>
                <select id="gender" name="Gender">
                    <option value="1">Male</option>
                    <option value="0">Female</option>
                </select>
            </td>
        </tr>
        <tr>
            <td><label for="yob">Year of Birth:</label></td>
            <td><input class="form-control m-3" type="text" id="yob" name="YoB"></td>
        </tr>
        <tr>
            <td><label for="address">Address:</label></td>
            <td><input class="form-control m-3" type="text" id="address" name="Address"></td>
        </tr>
        <tr>
            <td><label for="phone">Phone:</label></td>
            <td><input class="form-control m-3" type="text" id="phone" name="Phone"></td>
        </tr>
        <tr>
            <td><label for="salary">Salary:</label></td>
            <td><input class="form-control m-3" type="text" id="salary" name="Salary"></td>
        </tr>
        <tr>
            <td colspan="2" align="center"><button type="submit">Submit</button></td>
        </tr>
    </table>
</form>
@endsection
