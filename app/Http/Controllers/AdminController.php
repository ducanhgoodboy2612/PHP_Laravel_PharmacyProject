<?php

namespace App\Http\Controllers;

use App\Models\salesinvoice;
use App\Models\invoice_detail;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function showTotalRevenue()
    {
        
        // $totalRevenue = salesinvoice::withSum('invoiceDetails', 'Total_Price')->sum('invoiceDetails.Total_Price');
        // dd($totalRevenue);

        // return view('your-view-name', ['totalRevenue' => $totalRevenue]);

        $invoiceDetails = invoice_detail::all();
        $invoice_count = salesinvoice::count();
        
        $totalPriceSum = $invoiceDetails->map(function ($item) {
            return $item->Total_Price;
        })->sum();

        //dd($totalPriceSum);
        return view('adminLayouts.dashboard', ['totalPriceSum' => $totalPriceSum, 'invoice_count' => $invoice_count]);
    }
}
