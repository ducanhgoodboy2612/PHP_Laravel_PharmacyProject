@extends('adminLayouts.layout')

@section('content')
@isset($item)
<div>
    <h2>Employee Update</h2>
</div>
<form method="post" action="{{ route('employee.update', $item->ID) }}">
    @csrf
    @method('PUT')
    <table>
        <tr>
            <td><label for="name">Name:</label></td>
            <td><input class="form-control m-3 " type="text" id="name" name="Name" value="{{$item->Name}}"></td>
        </tr>
        <tr>
            <td><label for="gender">Gender:</label></td>
            <td>
                <select id="gender" name="Gender">
                    <option value="1" @if($item->Gender == 1) selected @endif>Male</option>
                    <option value="0" @if($item->Gender == 0) selected @endif>Female</option>
                </select>
            </td>
        </tr>
        <tr>
            <td><label for="yob">Year of Birth:</label></td>
            <td><input class="form-control m-3" type="text" id="yob" name="YoB" value="{{$item->YoB}}"></td>
        </tr>
        <tr>
            <td><label for="address">Address:</label></td>
            <td><input class="form-control m-3" type="text" id="address" name="Address" value="{{$item->Address}}"></td>
        </tr>
        <tr>
            <td><label for="phone">Phone:</label></td>
            <td><input class="form-control m-3" type="text" id="phone" name="Phone" value="{{$item->Phone}}"></td>
        </tr>
        <tr>
            <td><label for="salary">Salary:</label></td>
            <td><input class="form-control m-3" type="text" id="salary" name="Salary" value="{{$item->Salary}}"></td>
        </tr>
        <tr>
            <td colspan="2" align="center"><button type="submit">Submit</button></td>
        </tr>
    </table>
</form>
@endisset
@endsection
