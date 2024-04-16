<?php

namespace App\Http\Controllers;

use App\Models\pharma;
use Illuminate\Http\Request;

class User_productController extends Controller
{
    public function index()
    {
        $ds = pharma::all();
        return view('user.home', ['ds' => $ds]);
    }

    public function create()
    {
        return view('product.create');
    }

    public function detail($product_id)
    {
        $ds = pharma::find($product_id);
        //dd($ds);
        return view('user.detail', ['item' => $ds, 'id' => $product_id]);

        // dd($pharma);
        // $query = pharma::where('id', $pharma->id);
        // dd($query->toSql());
        // return view('product.edit', compact('pharma'));
    }

    public function store(Request $request)
    {
        pharma::create($request->all());
        return redirect()->route('products.index')->with('Message', "Thêm thành công !");
    }
    // public function update(Request  $request, pharma $pharma){
    //     $pharma->update($request->all());
    //     return redirect()->route('products.index')->with('Message', "Thêm thành công !"); 
    // }

    //     public function update(Request $request, $product_id)
// {
//     // Validate dữ liệu nhập từ form nếu cần
//     $request->validate([
//         'Product_Name' => 'required|string',
//         'Unit' => 'required|string',
//         'Unit_Price' => 'required|numeric',
//         'Quantity_In_Stock' => 'required|numeric'

    //     ]);

    //     // Tìm bản ghi pharma cần cập nhật
//     $pharma = pharma::find($product_id);

    //     // Kiểm tra xem bản ghi có tồn tại hay không
//     if(!$pharma) {
//         return redirect()->back()->with('error', 'Không tìm thấy sản phẩm');
//     }

    //     // Cập nhật dữ liệu từ request vào bản ghi pharma
//     $pharma->update($request->all());

    //     // Chuyển hướng về trang danh sách sản phẩm sau khi cập nhật thành công
//     return redirect()->route('products.index')->with('success', 'Cập nhật sản phẩm thành công');
// }


    public function update(Request $request, $id)
    {
        //dd("update");
        // $validatedData = $request->validate([
        //     'Product_Id' => 'required',
        //     'Cate_Id' => 'required',
        //     'Product_Name' => 'required',
        //     'Unit' => 'required',
        //     'Unit_Price' => 'required',
        //     'Quantity_In_Stock' => 'required',
        //     'Image' => 'required',
        //     'Status' => 'required',
        //     'Description' => 'required',
        // ]);
        //  $query = pharma::where('Product_Id', $id);
        //     dd($query->toSql());
        $product = pharma::find($id);
        //dd($product->Product_Name);

        // Update the product
        $product->update($request->all());

        return redirect('/products')->with('success', 'Product updated successfully');
    }


    // public function destroy(pharma $pharma){
    //     $pharma->delete();
    //     return redirect()->route('products.update')->with('Message', "Thêm thành công !"); 

    // }

    public function destroy(int $Product_Id)
    {
        $product = pharma::findOrFail($Product_Id);

        $product->delete();
        return redirect('/products')->with('success', 'Product deleted successfully');
    }
}
