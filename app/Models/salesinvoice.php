<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class salesinvoice extends Model
{
    use HasFactory;
    protected $table = 'salesinvoice';
    protected $primaryKey = 'InvoiceID';

    protected $fillable = [
        'CreatedDate',
        'Status',
        'CustomerName',
        'Phone',
        'Address',
        'Email',
    ];
    public $timestamps = false;

    public function invoiceDetails()
    {
        return $this->hasMany(invoice_detail::class, 'InvoiceID');
    }
}
