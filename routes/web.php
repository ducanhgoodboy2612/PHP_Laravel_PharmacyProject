<?php

use App\Http\Controllers\CartController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/greeting', function () {
    return 'Hello greeting';
});
Route::get('/cong/{a}/{b}', function ($a, $b) {
    $c = $a + $b;
    return "Phep cong = $c";
});
// route ket hop voi view
Route::get('/pheptinh', function () {
    $txta = request('txta');
    $txtb = request('txtb');
    $tong = $txta + $txtb;
    return view('pheptinh', ['tong' => $tong]);
});
// Route::get('/bai6', function () {
//     $n = request('n');
//     return view('bai6', ['n' => $n]);
// });
use App\Http\Controllers\pharmaController;
use App\Http\Controllers\User_productController;
use App\Http\Controllers\User_StoreController;
use App\Http\Controllers\employeeController;
use App\Http\Controllers\CheckOutController;
use App\Http\Controllers\AccountController;
use App\Http\Controllers\AdminController;

// use App\Http\Controllers\CartController;

Route::resource('admin/products', pharmaController::class);
Route::post('/admin/products/search', 'App\Http\Controllers\pharmaController@search')->name('products.search');

// Route::prefix('admin/products')->group(function () {
//     Route::get('add/{id}', [CartController::class, 'add']);
//     Route::get('/delete/{rowId}', [CartController::class, 'delete']);
//     Route::post('/update', [CartController::class, 'update'])->name('cart.update');

//     Route::get('/', [pharmaController::class]);
// });
// Route::resource('/admin/employee', employeeController::class);
// Route::get('/employee/{id}/edit', 'App\Http\Controllers\employeeController@edit');
// Route::put('/employee/update/{id}', 'App\Http\Controllers\employeeController@update')->name('employee.update');

Route::prefix('cart')->group(function () {
    Route::get('add/{id}', [CartController::class, 'add']);
    Route::get('/delete/{rowId}', [CartController::class, 'delete']);
    Route::post('/update', [CartController::class, 'update'])->name('cart.update');

    Route::get('/', [CartController::class, 'index']);
});

Route::prefix('account')->group(function () {
    Route::get('login', [AccountController::class, 'login'])->name('account.login');
    Route::post('check', [AccountController::class, 'checkLogin'])->name('account.check') ;
    
});
Route::get('admin', [AdminController::class, 'showTotalRevenue']) -> name('admin');
Route::resource('/admin/employee', employeeController::class);
Route::get('/employee/{id}/edit', 'App\Http\Controllers\employeeController@edit');
Route::put('/employee/update/{id}', 'App\Http\Controllers\employeeController@update')->name('employee.update');

Route::prefix('checkout')->group(function () {
    Route::get('add/{id}', [CartController::class, 'add']);
    Route::get('/delete/{rowId}', [CartController::class, 'delete']);
    Route::post('/update', [CartController::class, 'update'])->name('cart.update');

    Route::get('/', [CheckOutController::class, 'index']);
    Route::post('/addOrder', [CheckOutController::class, 'addOrder']);
});

Route::resource('/', User_productController::class);
Route::resource('store', User_StoreController::class);
Route::post('/store/search', 'App\Http\Controllers\User_StoreController@search')->name('store.search');
Route::get('/store/category/{cate_id}', [pharmaController::class, 'getByCate'])->name('store.category');

// Route::post('account/check', [AccountController::class, 'checkLogin']);
Route::get('/products/{product_id}/edit', 'App\Http\Controllers\pharmaController@edit');
Route::get('/user/{product_id}/detail', 'App\Http\Controllers\User_productController@detail');
// Route::put('/products/{id}/update', 'App\Http\Controllers\pharmaController@update');
Route::put('/products/update/{id}', 'App\Http\Controllers\pharmaController@update')->name('products.update');
// Route::put('/products/update/{product_id}', 'pharmaController@update')->name('products.update');



// Route::get('/admin', function () {
//     return view('adminLayouts.dashboard');
// })->name('admin');
Route::get('/admin-test', function () {
    return view('adminLayouts.test');
});

// Route::get('/bai1', function () {
//     return view('bai1');
// });

// Route::post('/tong', function (Request $request) {
//     $n = $request->input('n');
//     $tong = 0;

//     if ($n <= 0) {
//         return view('bai1')->with('error', 'Vui lòng nhập một số nguyên dương.');
//     } else {
//         for ($i = 1; $i <= $n; $i++) {
//             $tong += $i;
//         }
//         return view('bai1')->with('tong', $tong)->with('n', $n);
//     }
// });



// Route::get('/bai2', function () {
//     $kq = "";
//     return view('bai2', ['kq' => $kq]);
// });
// Route::post('/bai2', function (Request $req) {
//     $a = $req->txta;
//     $b = $req->txtb;
//     $c = $req->txtc;
//     $kq = "";
//     $delta = $b * $b - 4 * $a * $c;
//     if ($delta < 0) $kq = "Phuong trinh chi co nghiem phuc";
//     else {
//         $x1 = (-$b - sqrt($delta)) / 2 / $a;
//         $x2 = (-$b + sqrt($delta)) / 2 / $a;
//         $kq = $x1 == $x2 ? "Phuong trinh co nghiem kep <br>X1=X2=$x1" : "Phuong trinh co 2 nghiem phan biet<br>X1=$x1<br>X2=$x2";
//     }
//     return view('bai2', ['kq' => $kq]);
// });



// Route::get('/bai3', function () {
//     return view('bai3');
// });

// Route::post('/bai3', function (Request $request) {
//     $n = $request->input('n');
//     $soHoanHao = [];

//     if ($n <= 0) {
//         return view('bai3')->with('error', 'Vui lòng nhập một số nguyên dương.');
//     } else {
//         for ($i = 1; $i <= $n; $i++) {
//             if (isSoHoanHao($i)) {
//                 $soHoanHao[] = $i;
//             }
//         }
//         return view('bai3')->with('soHoanHao', $soHoanHao)->with('n', $n);
//     }
// });

// function isSoHoanHao($number)
// {
//     $sum = 0;
//     for ($i = 1; $i <= $number / 2; $i++) {
//         if ($number % $i == 0) {
//             $sum += $i;
//         }
//     }
//     return $sum == $number;
// }





// Route::get('/bai4', function () {
//     return view('bai4');
// });

// Route::post('/bai4', function (Request $request) {
//     $n = $request->input('n');
//     $k = $request->input('k');
//     $tong = 0;

//     if ($n <= 0 || $k <= 0 || $k > $n) {
//         return view('bai4')->with('error', 'Vui lòng nhập số nguyên dương và k nhỏ hơn hoặc bằng n.');
//     } else {
//         $tong = tinhToHop($n, $k);
//         return view('bai4')->with('tong', $tong)->with('n', $n);
//     }
// });

// function tinhToHop($n, $k)
// {
//     return factorial($n) / (factorial($k) * factorial($n - $k));
// }

// function factorial($num)
// {
//     if ($num == 0) {
//         return 1;
//     } else {
//         return $num * factorial($num - 1);
//     }
// }




// Route::get('/bai5', function () {
//     return view('bai5');
// });

// Route::post('/bai5', function (Request $request) {
//     $n = $request->input('n');
//     $soNguyenTo = [];

//     if ($n <= 1) {
//         return view('bai5')->with('error', 'Vui lòng nhập một số nguyên dương lớn hơn 1.');
//     } else {
//         for ($i = 2; $i <= $n; $i++) {
//             if (isSoNguyenTo($i)) {
//                 $soNguyenTo[] = $i;
//             }
//         }
//         return view('bai5')->with('soNguyenTo', $soNguyenTo)->with('n', $n);
//     }
// });

// function isSoNguyenTo($number)
// {
//     if ($number <= 1) {
//         return false;
//     }
//     for ($i = 2; $i <= sqrt($number); $i++) {
//         if ($number % $i == 0) {
//             return false;
//         }
//     }
//     return true;
// }

// Route::get('/bai6', function () {
//     $n = request('n');
//     $numbers = [];
//     for ($i = 1; $i <= $n; $i++) {
//         if ($i % 3 == 0) {
//             $numbers[] = $i;
//         }
//     }
//     return view('bai6', ['numbers' => $numbers]);
// });
// Route::get('/ptb2',function(){
//     $kq="";
//     return view('ptb2',['kq'=>$kq]);
// });
// Route::post('/ptb2',function(Request $req){
//     $a = $req->txta;
//     $b = $req->txtb;
//     $c = $req->txtc;
//     $kq ="";
//     $delta = $b*$b-4*$a*$c;
//     if($delta<0) $kq = "Phuong trinh chi co nghiem phuc";
//     else{
//         $x1 = (-$b-sqrt($delta))/2/$a;
//         $x2 = (-$b+sqrt($delta))/2/$a;
//         $kq = $x1==$x2?"Phuong trinh co nghiem kep <br>X1=X2=$x1":"Phuong trinh co 2 nghiem phan biet<br>X1=$x1<br>X2=$x2";
//     }
//     return view('ptb2',['kq'=>$kq]);
// });

// // BAI TAP

// Route::get('/bai7', function () {
//     $input = request('input');
//     $elements = explode(' ', $input);
//     sort($elements);
//     return view('bai7', ['sortedElements' => $elements]);
// });

// Route::get('/bai8', function () {
//     $r = request('r');
//     $dientich = pi() * $r * $r;
//     return view('bai8', ['dientich' => $dientich, 'r' => $r]);
// });

// Route::get('/bai9', function () {
//     return view('bai9');
// });
// Route::post('/bai9', function () {
//     $inputArray = explode(' ', request('inputArray'));
//     $a = request('a');
//     $count = 0;
//     foreach ($inputArray as $element) {
//         if ($element == $a) {
//             $count++;
//         }
//     }
//     return view('bai9', ['count' => $count, 'a' => $a]);
// });

// Route::get('/bai10', function () {
//     return view('bai10');
// });

// Route::post('/bai10', function () {
//     $h = request('h');
//     $pascalTriangle = generatePascalTriangle($h);
//     return view('bai10', ['pascalTriangle' => $pascalTriangle, 'h' => $h]);
// });

// function th($a, $b) {
//     if ($a == 0 || $a == $b) {
//         return 1;
//     } else {
//         return th($a - 1, $b - 1) + th($a, $b - 1);
//     }
// }

// function generatePascalTriangle($h) {
//     $pascalTriangle = "";

//     for ($i = 0; $i < $h; $i++) {
//         $k = round(($h - $i));
//         $pascalTriangle .= str_repeat("&nbsp;&nbsp;&nbsp;&nbsp;", $k);

//         for ($j = 0; $j <= $i; $j++) {
//             $pascalTriangle .= th($j, $i) . "&nbsp;&nbsp;&nbsp;&nbsp;";
//         }

//         $pascalTriangle .= "<br>";
//     }

//     return $pascalTriangle;
// }


