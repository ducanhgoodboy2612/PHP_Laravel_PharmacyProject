<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class employee extends Model
{
    use HasFactory;

    protected $table='employee';
    protected $primaryKey = 'ID';
    protected $fillable = ['Name', 'Gender', 'YoB', 'Address', 'Phone', 'Salary'];

    public $timestamps = false;
}
