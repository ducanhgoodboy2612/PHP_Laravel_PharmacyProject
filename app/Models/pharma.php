<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pharma extends Model
{
    use HasFactory;
    protected $table='pharma';
    protected $primaryKey = 'Product_Id';
    protected $fillable = [
        'Product_Id',
        'Cate_Id',
        'Product_Name',
        'Unit',
        'Unit_Price',
        'Quantity_In_Stock',
        'Image',
        'Status',
        'Description',
    ];

    public $timestamps = false;
}
