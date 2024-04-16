@extends('adminLayouts.layout')

@section('content')
<div>
    <h2>Thêm sản phẩm</h2>
</div>
<form method="post" action="{{ route('products.store') }}" enctype="multipart/form-data">
    @csrf
    <table>
        <tr>
            <td><label for="cate_id">Category:</label></td>
            <td>
                <select class="form-control m-3" id="cate_id" name="Cate_Id">
                    @foreach($cates as $cate)
                        <option value="{{ $cate->Cate_id }}">{{ $cate->Cate_name }}</option>
                    @endforeach
                </select>
            </td>
        </tr>
        <tr>
            <td><label for="product_name">Product Name:</label></td>
            <td><input class="form-control m-3" type="text" id="product_name" name="Product_Name"></td>
        </tr>
        <tr>
            <td><label for="unit">Unit:</label></td>
            <td><input class="form-control m-3" type="text" id="unit" name="Unit"></td>
        </tr>
        <tr>
            <td><label for="unit_price">Unit Price:</label></td>
            <td><input class="form-control m-3" type="text" id="unit_price" name="Unit_Price"></td>
        </tr>
        <tr>
            <td><label for="quantity_in_stock">Quantity In Stock:</label></td>
            <td><input class="form-control m-3" type="text" id="quantity_in_stock" name="Quantity_In_Stock"></td>
        </tr>
        <tr>
            <td><label for="image">Image:</label></td>
            <td><input class="form-control m-3" type="file" id="image" name="file_upload"></td>
        </tr>
        <tr>
            <td><label for="status">Status:</label></td>
            <td>
                <select id="status" class="form-control" style="margin-left: 18px" name="Status">
                    <option value="1">Active</option>
                    <option value="0">Inactive</option>
                </select>
            </td>
        </tr>
        <tr>
            <td><label for="description">Description:</label></td>
            <td><textarea class="form-control m-3" id="description" name="Description"></textarea></td>
        </tr>
        <tr>
            <td colspan="2" align="center"><button type="submit">Submit</button></td>
        </tr>
    </table>
</form>



@endsection
