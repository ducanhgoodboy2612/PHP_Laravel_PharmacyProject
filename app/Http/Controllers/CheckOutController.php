<?php

namespace App\Http\Controllers;

use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Http\Request;
use App\Models\salesinvoice;
use App\Models\invoice_detail;
use App\Models\customer;

class CheckOutController extends Controller
{
    public function index()
    {
        $cart = Cart::content();
        $total = Cart::total();
        $subtotal = Cart::subtotal();
        $count = Cart::count();

        return view('user.checkout', ['cart' => $cart, 'total' => $total, 'subtotal' => $subtotal, 'count' => $count]);
    }

    public function addOrder(Request $request)
    {
        // 
        $request->validate([
            'CustomerName' => 'required|string|max:255',
            'Phone' => 'required|numeric|digits_between:10,11',
            'Email' => 'required|email|max:255',
            'Address' => 'required|string|max:255',
        ]);

        //add customer
        $customer = customer::create([
        'Name' => $request->input('CustomerName'),
        'Phone' => $request->input('Phone'),
        'Email' => $request->input('Email'),
        'Address' => $request->input('Address'),
        
        'Gender' => '',
        'AccPoint' => 30,
        ]);

        //add invoice
        $order = salesinvoice::create($request->all());

        //add detail
        $carts = Cart::content();
        foreach ($carts as $cart) {
            $data = [
                'InvoiceID' => $order->InvoiceID,
                'Product_Id' => $cart->id,
                'Quantity' => $cart->qty,
                'Total_Price' =>  $cart->price * $cart->qty,

            ];
            invoice_detail::create( $data );
        }

     

        Cart::destroy();
        return redirect()->route('store.index')->with('success', 'Bạn đã thanh toán thành công');
    }
}
