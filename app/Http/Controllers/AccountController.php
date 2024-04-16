<?php

namespace App\Http\Controllers;

use App\Models\pharma;
use App\Models\useraccount;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AccountController extends Controller
{
    // public function index()
    // {
    //     $ds = pharma::all();
    //     return view('product.product_index', ['ds' => $ds]);
    // }

   public function login(){
    return view( 'account.login');
   }

    public function checkLogin(Request $request)
    {
        $email = $request->input('Email');
        $password = $request->input('Pass');
        //dd($email);

        $user = useraccount::where('Email', $email)->first();
           
            

        if ($user && $user->Pass === $password) {

            // return view('adminLayouts.layout');
            return redirect()->route('admin');
        }
        else {
            return redirect()->route('account.login');
        }


        // $credentials = $request->only('Email', 'Pass');

        // if (Auth::attempt($credentials)) {
        //     // Xác thực thành công
        //     dd("login");
        //     return redirect()->route('admin');
        // }

        // // Xác thực thất bại, redirect về form đăng nhập với thông báo lỗi
        // return redirect()->route('login')->with('error', 'Invalid credentials');
    }
}
