<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class invoice_detail extends Model
{
    use HasFactory;

    protected $table = 'invoice_detail';
    protected $primaryKey = 'id'; 

    protected $fillable = [
        'InvoiceID',
        'Product_Id',
        'Quantity',
        'Total_Price',
    ];

   
    public $timestamps = false;
}
