<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cate extends Model
{
    use HasFactory;

    protected $table = 'cate';
    protected $primaryKey = 'Cate_id';

    protected $fillable = [
        'Cate_name',
        'Descript',
    ];
}
