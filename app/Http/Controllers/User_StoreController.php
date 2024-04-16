<?php

namespace App\Http\Controllers;

use App\Models\pharma;
use App\Models\Cate;
use Illuminate\Http\Request;

class User_StoreController extends Controller
{
    public function index()
    {
        $ds = pharma::paginate(8);
        $cates = Cate::all();
        return view('user.store', ['ds' => $ds, 'cates' => $cates]);
    }

    public function search(Request $request)
    {
        $find = $request->find;
        $ds = pharma::where('product_Name', 'like', '%' . $find . '%')->get();
        $cates = Cate::all();
        return view('user.search', ['ds' => $ds, 'cates' => $cates]);
    }

    public function show($id)
    {
        $product = pharma::find($id);
        if (!$product) {
            abort(404); // Nếu không tìm thấy sản phẩm, hiển thị trang 404
        }
        return view('user.store', ['product' => $product]);
    }
}
