@extends('adminLayouts.layout')

@section('content')
    @isset($ds)
        @if (session('success'))
            <div  id="successAlert" class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif
        <div class="text-right">
            <a class="btn btn-success m-2" href="{{ route('employee.create') }}">Add new employee</a>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <h1 class="text-primary"> EMPLOYEE LIST </h1>
                </div>
            </div>
        </div>
        <table class="table">
            <thead class="thead-primary bg-primary text-white">
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Gender</th>
                    <th>Year of Birth</th>
                    <th>Address</th>
                    <th>Phone</th>
                    <th>Salary</th>
                    <th>Edit</th>
                    <th>Delete</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($ds as $item)
                    <tr>
                        <td>{{ $item['ID'] }}</td>
                        <td>{{ $item->Name }}</td>
                        <td>{{ $item->Gender }}</td>
                        <td>{{ $item->YoB }}</td>
                        <td>{{ $item->Address }}</td>
                        <td>{{ $item->Phone }}</td>
                        <td>{{ $item->Salary }}</td>
                        <td>
                            <a class="btn btn-info fa fa-pencil" href="/employee/{{ $item->ID }}/edit">Edit</a>
                        </td>
                        <td>
                            <form action="{{ route('employee.destroy', $item['ID']) }}" method="POST" style="display: inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger fa fa-trash"
                                    onclick="return confirm('Bạn có chắc chắn muốn xóa?')"
                                    style="padding-left: 0px; margin-left: 10px">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @endisset
@endsection
