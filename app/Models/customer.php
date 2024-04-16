<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class customer extends Model
{
    use HasFactory;

    protected $table = 'customer';
    protected $primaryKey = 'Id';
    protected $fillable = ['Name', 'Gender', 'Address', 'Phone', 'Email', 'AccPoint'];

    public $timestamps = false;
}
