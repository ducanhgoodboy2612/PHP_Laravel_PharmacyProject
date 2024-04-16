@extends('adminLayouts.layout')

@section('content')
    @isset($products)
        <form action="{{ route('products.search')}}" method="post" class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
            @csrf
            <div class="input-group">
                <input type="text" name="search-data" class="form-control bg-light border-0 small" placeholder="Enter Product's name" aria-label="Search"
                    aria-describedby="basic-addon2">
                <div class="input-group-append">
                    <button class="btn btn-primary" type="submit">
                        <i class="fas fa-search fa-sm"></i>
                    </button>
                </div>
            </div>
        </form>
        <div class="text-right">
            <a class="btn btn-success m-2" href="{{ route('products.create') }}">Add new product</a>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <h1 class="text-primary"> PRODUCT LIST </h1>
                </div>
            </div>
        </div>
        <table class="table">
            <thead class="thead-primary bg-primary text-white">
                <tr>
                    <th>ID</th>
                    <th>Image</th>  
                    <th>Product_Name</th>
                    <th>Unit</th>
                    <th>Price</th>
                    <th>Quan</th>
                    <th>Description</th>
                    <th>Status</th>
                    <th>Edit</th>
                </tr>

            </thead>
            <tbody>
                @foreach ($products as $item)
                    <tr>
                        <td>{{ $item['Product_Id'] }}</td>
                        <td><img src="/assetuser{{ $item['Image'] }}" alt="" style="width: 70px"></td>
                        <td>{{ $item['Product_Name'] }}</td>
                        <td>{{ $item['Unit'] }}</td>
                        <td>{{ $item['Unit_Price'] }}</td>
                        <td>{{ $item['Quantity_In_Stock'] }}</td>
                        <td>{{ $item['Description'] }}</td>
                        <td>{{ $item['Status'] }}</td>
                        <td>
                            <div class="d-flex justify-content-between">
                                <a class="btn btn-info fa fa-pencil" href="/products/{{ $item['Product_Id'] }}/edit">Edit</a>
                                <form action="{{ route('products.destroy', $item['Product_Id']) }}" method="POST"
                                    style="display: inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger fa fa-trash"
                                        onclick="return confirm('Bạn có chắc chắn muốn xóa?')"
                                        style="padding-left: 0px; margin-left: 10px">Delete</button>
                                </form>
                            </div>

                        </td>
                        <!-- <td><a class="btn btn-danger fa fa-pencil" href="/products/{{ $item['Product_Id'] }}/edit">Edit</a></td> -->

                        <!-- <form action="{{ route('products.destroy', $item->Product_Id) }}" method = "POST">
                                <a href="{{ route('products.edit', $item->Product_Id) }}" class="btn btn-info">Sửa</a>
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Xóa</button>
                            </form> -->


                    </tr>
                @endforeach


            </tbody>

        </table>
    @endisset
@endsection
