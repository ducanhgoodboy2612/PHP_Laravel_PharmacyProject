<?php

namespace App\Http\Controllers;

use App\Models\pharma;
use App\Models\Cate;
use Illuminate\Http\Request;

class pharmaController extends Controller
{
    public function index()
    {
        $ds = pharma::paginate(10);
        $cates = Cate::all();
        return view('product.product_index', ['ds' => $ds, 'cates'  => $cates]);
    }

    public function getByCate($cate_id)
    {

        $cate_prod = pharma::where('Cate_id', $cate_id)->get();
        $cates = Cate::all();
        return view('user.search', ['cate_prod' => $cate_prod, 'cates' => $cates]);
    }

    public function create()
    {
        $cates = Cate::all();
        return view('product.create', ['cates' => $cates]);
    }

    public function edit($product_id)
    {
        
        $ds = pharma::find($product_id);
        $cates = Cate::all();
        //dd($ds);
        return view('product.edit', ['item' => $ds, 'id' => $product_id, 'cates' => $cates]);

        // dd($pharma);
        // $query = pharma::where('id', $pharma->id);
        // dd($query->toSql());
        // return view('product.edit', compact('pharma'));
    }

    public function store(Request $request)
    {
        if ($request->has('file_upload')) {
            $file = $request->file_upload;
            $file_name = "/img/medicine/" . $file->getClientOriginalName();
            //dd($file_name);
            $file->move(public_path('/uploads'), $file_name);
            $request->merge(['Image' => $file_name]);
        }
        pharma::create($request->all());
        return redirect()->route('products.index')->with('Message', "Product created successfully !");
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
        if($request->has('file_upload')){
            $file = $request->file_upload;
            $file_name = "/img/medicine/" . $file->getClientOriginalName();
            //dd($file_name);
            $file->move(public_path('/uploads'), $file_name);
            $request->merge(['Image' => $file_name]);
        }
        
        //dd($request->all());
        $product = pharma::find($id);
        //dd($product->Product_Name);

        // Update the product
        $product->update($request->all());

        return redirect('/admin/products')->with('success', 'Product updated successfully');
    }


    // public function destroy(pharma $pharma){
    //     $pharma->delete();
    //     return redirect()->route('products.update')->with('Message', "Thêm thành công !"); 

    // }

    public function destroy(int $Product_Id)
    {
        $product = pharma::findOrFail($Product_Id);

        $product->delete();
        return redirect('/admin/products')->with('success', 'Product deleted successfully');
    }

    public function search(Request $request)
    {
      
        $searchData = $request->input('search-data');

        // Sử dụng query Builder hoặc Eloquent để tìm kiếm dữ liệu theo tên sản phẩm
        $products = pharma::where('Product_Name', 'like', "%$searchData%")->get();

        return view('product.search', ['products' => $products]);
    }
}
