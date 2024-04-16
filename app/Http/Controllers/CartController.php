<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Gloudemans\Shoppingcart\Facades\Cart;
use App\Models\pharma;

class CartController extends Controller
{
    public function index()
    {
        //dd(Cart::content());
        $cart = Cart::content();
        $total = Cart::total();
        $subtotal = Cart::subtotal();
        $count = Cart::count();

        return view('user.cart', ['cart' => $cart, 'total' => $total, 'subtotal' => $subtotal, 'count' => $count]);
        //return view('user.cart');
    }
    public function add($id)
    {
        $product = pharma::find($id);
        // $existingItem = Cart::get($id);

        // if ($existingItem) {
            
        //     Cart::update($id, $existingItem->qty + 1);
        // } else {
            Cart::add([
                'id' => $product->Product_Id,
                'name' => $product->Product_Name,
                'qty' => 1,
                'unit' => $product->Unit,
                'price' => $product->Unit_Price,
                
                'weight' => 0,
                'options' => [
                    'category_id' => $product->Cate_Id,
                    'images' => $product->Image

                    
                ]
            ]);
        

        //dd(Cart::content());
        return redirect()->route('store.index')->with('success', 'Sản phẩm đã được thêm vào giỏ hàng.');

    }

    // public function delete(Request $request)
    // {
        
    //     if ($request->ajax()) {
    //         $respone['cart'] = Cart::remove($request->rowId);
    //         $respone['count'] = Cart::count();
    //         $respone['total'] = Cart::total();
    //         $respone['subtotal'] = Cart::subtotal();
    //         return $respone;
    //     }
    //     return back();

    //     dd("go del nmbt");
    // }

    public function delete($rowId)
    {
        Cart::remove($rowId);
        return redirect()->back()->with('success', 'Sản phẩm đã được xóa khỏi giỏ hàng.');
    }

    public function update(Request $request)
    {
        if ($request->isMethod('post')) {
            $rowId = $request->input('rowId');
            $action = $request->input('action');

            if ($action == 'increase') {
                Cart::update($rowId, Cart::get($rowId)->qty + 1);
            } elseif ($action == 'decrease') {
                if(Cart::get($rowId)->qty > 1)
                    Cart::update($rowId, Cart::get($rowId)->qty - 1);
            }

            return redirect()->back()->with('success', 'Số lượng sản phẩm đã được cập nhật.');
        }
        return back()->with('error', 'Yêu cầu không hợp lệ.');
    }

}
