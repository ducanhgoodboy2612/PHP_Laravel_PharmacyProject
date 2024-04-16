<?php

namespace App\Http\Controllers;

use App\Models\Cate;
use Illuminate\Http\Request;

class CateController extends Controller
{
    public function index()
    {
        $cates = Cate::all();
        return view('cates.index', compact('cates'));
    }

    public function create()
    {
        return view('cates.create');
    }

    public function store(Request $request)
    {
        Cate::create($request->all());
        return redirect()->route('cates.index');
    }

}
